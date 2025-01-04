<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Models\Ticket;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $json = [
                'data' => [],
                'draw' => $request->input('draw', 1),
                'recordsFiltered' => 0,
                'recordsTotal' => 0,
            ];

            $query = Ticket::query();
            $json['recordsTotal'] = $query->count();

            if ($request->has('order')) {
                foreach ($request->order as $order) {
                    $name = $order['name'];
                    if ($name) {
                        $dir = $order['dir'];

                        $query->orderBy($name, $dir);
                    }
                }
            }

            if ($request->has('search') && !empty($request->search)) {

                //global search
                if (!empty($request->search['value'])) {
                    if ($request->search['regex']) {
                        $query->orWhere('id', 'regexp', $request->search['value'])
                            ->orWhereHas('supportEngineer', function ($query) use ($request) {
                                $query->where('name', 'regexp', $request->search['value']);
                            })
                            ->orWhereHas('vessel', function ($query) use ($request) {
                                $query->where('title', 'regexp', $request->search['value']);
                            });
                    } else {
                        $query->orWhere('id', 'like', '%' . $request->search['value'] . '%')
                            ->orWhereHas('supportEngineer', function ($query) use ($request) {
                                $query->where('name', 'like', '%' . $request->search['value'] . '%');
                            })
                            ->orWhereHas('vessel', function ($query) use ($request) {
                                $query->where('title', 'like', '%' . $request->search['value'] . '%');
                            });
                    }
                }

                if (!empty($request->search['id']) && is_int((int) $request->search['id'])) {
                    $query->where('id', (int) $request->search['id']);
                }

                if (isset($request->search['category_id']) && is_int((int) $request->search['category_id'])) {
                    $query->where('category_id', $request->search['category_id']);
                }

                if (isset($request->search['service_line_id']) && is_int((int) $request->search['service_line_id'])) {
                    $query->where('service_line_id', $request->search['service_line_id']);
                }

                if (isset($request->search['status_id']) && is_int((int) $request->search['status_id'])) {
                    $query->where('status_id', $request->search['status_id']);
                }

                if (isset($request->search['support_engineer_id']) && is_int((int) $request->search['support_engineer_id'])) {
                    $query->where('support_engineer_id', $request->search['support_engineer_id']);
                }
            }

            $json['data'] = $query->skip($request->input('start', 0))
                ->take($request->input('length', 10))
                ->get()
                ->map(function ($ticket) {
                    return [
                        'category_id' => $ticket->category_id,
                        'category' => $ticket->category->title,
                        'id' => $ticket->id,
                        'service_line_id' => $ticket->service_line_id,
                        'service_line' => $ticket->serviceLine->title,
                        'sla_dt' => $ticket->sla_dt,
                        'support_engineer_id' => $ticket->support_engineer_id,
                        'support_engineer' => $ticket->supportEngineer->name,
                        'vessel_id' => $ticket->vessel_id,
                        'vessel' => $ticket->vessel->title,
                        'working_time' => $ticket->working_time,
                    ];
                })
                ->toArray();

            //\Log::info('SQL Query: ' . $query->toSql());

            $json['recordsFiltered'] = $query->count();

            return response()->json($json);
        } else {
            return view('tickets.index', ['title' => 'Tickets List']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.create', ['item' => new Ticket(), 'title' => 'Create Ticket']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request): RedirectResponse
    {
        $model = new Ticket($request->validated());

        $model->created_by = auth()->id();

        $model->save();

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'), ['title' => 'Show Ticket: ' . $ticket->id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', ['item' => $ticket, 'title' => 'Edit Ticket']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTicketRequest $request, string $id): RedirectResponse
    {
        $model = Ticket::findOrFail($id);

        $model->update($request->validated());

        $model->updated_by = auth()->id();

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        /*soft delete
        laravel 11 support soft delete https://laravel.com/docs/11.x/eloquent#soft-deleting
        $ticket->update([
        'deleted_at' => now(),
        'deleted_by' => auth()->id()
        ]);
         */

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket deleted successfully');
    }
}
