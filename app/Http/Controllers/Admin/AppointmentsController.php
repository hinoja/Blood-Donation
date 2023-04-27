<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointement;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        $events = [];

        $appointments = Appointement::with(['user', 'hospital'])->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' =>"Donor :". $appointment->user->name . ' (' . $appointment->hospital->name . ')',
                'start' => $appointment->time,
                // 'end' => $appointment->finish_time,
            ];
        }


        return view('admin.appointments.index',compact('events'));
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
