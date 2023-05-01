<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Appointement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {

        $events = [];

        $appointments = Appointement::with(['user', 'hospital'])->get();
        // $appointments = Event::get();

        foreach ($appointments as $appointment) {
            $events[] = [
                // 'title' => "Donor :" . $appointment->title ,
                'title' => "Donor :" . $appointment->user->name . ' (' . $appointment->hospital->name . ')',
                'start' => $appointment->start,
                'end' => $appointment->end,
                // 'end' => null,
            ];
        }


        // $events=[];
        // $events =Event::all();
        // json_encode(Event::all());
        // dd($events);
        // $events = Event::get();
        return view(
            'admin.appointments.index',
            compact('events')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
