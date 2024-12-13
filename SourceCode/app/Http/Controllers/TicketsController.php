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
    public function index()
    {
        $title = 'Tickets';
        $tickets = Ticket::select(
            'categories.title as category_title', 
            'service_lines.title as service_line_title',
            'vessels.title as vessel_title', 
            'tickets.*')
            
            ->join('categories', 'tickets.category_id', '=', 'categories.id')
            ->join('service_lines', 'tickets.service_lines_id', '=', 'service_lines.id')
            ->join('vessels', 'tickets.vessel_id', '=', 'vessels.id')

            ->latest()
            ->paginate(5);

        return view('tickets.index', compact('tickets', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
