<?php

namespace App\Http\Controllers\Admin;


use Carbon\Carbon;
use App\Models\Event;
use App\Models\Appointement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Admin\ValidateAppointmentNotification;

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
        return view(
            'admin.appointments.index',
            compact('events')
        );
    }

 }
