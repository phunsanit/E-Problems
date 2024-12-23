<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
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
                    $dir = $order['dir'];
                    $name= $order['name'];

                    $query->orderBy($name, $dir);
                }
            }

            if ($request->has('search') && !empty($request->search)) {

                if (!empty($request->search['id']) && is_int((int) $request->search['id'])) {
                    $query->where('id', (int) $request->search['id']);
                }

                if (isset($request->search['category_id']) && is_int((int) $request->search['category_id'])) {
                    $query->where('category_id', $request->search['category_id']);
                }

                if (isset($request->search['service_lines_id']) && is_int((int) $request->search['service_lines_id'])) {
                    $query->where('service_lines_id', $request->search['service_lines_id']);
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
                        'service_lines_id' => $ticket->service_lines_id,
                        //'service_lines' => $ticket->service_lines->title,
                        'sla_dt' => $ticket->sla_dt,
                        'support_engineer_id' => $ticket->support_engineer_id,
                        'vessel_id' => $ticket->vessel_id,
                        'vessel' => $ticket->vessel->title,
                        'working_time' => $ticket->working_time,
                    ];
                })
                ->toArray();

            $json['recordsFiltered'] = $query->count();

            \Log::info('SQL Query: ' . $query->toSql());

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
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ticket::create($request->validated());

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update($request->validated());

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket deleted successfully');
    }
}
