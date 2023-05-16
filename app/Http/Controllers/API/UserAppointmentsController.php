<?php

namespace App\Http\Controllers\API;

use App\Models\User;

use App\Models\Hospital;
use App\Models\Appointement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class UserAppointmentsController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'userId' => ['required', 'integer'],
            'hospitalId' => ['required', 'integer'],
            'start' => ['required', 'date', 'after_or_equal:now()'],

        ]);
        $user = User::find($data['userId']);
        $hospital = Hospital::find($data['hospitalId']);
        try {
            if (!$user || !$hospital) {

                $staus = 'false';
                $message = "User or Hospital is incorrect";
                // } elseif (typeOf($start) !== date('d,m Y')) {
                //     $staus = 'false';
                //     $message = "incorrect format of date";
            } else {
                Appointement::create([
                    'hospital_id' => $data['hospitalId'],
                    'user_id' => $data['userId'],
                    'start' => $data['start'],
                ]);
                $staus = 'true';
                $message = "Appointment is save with successfull";
            }
            return response()->json([
                'Staus' => $staus,
                'message' => $message,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Staus' => 'false',
                'message' => $e->getMessage(),
            ]);
        }
    }
    public function appointments($id)
    {
        try {
            $user = User::find($id);
            if (!$user) {
                return response()->json([
                    'Staus' => 'false',
                    'message' => "Any User",
                ]);
            } else {

                $formattedAppointments = [];
                foreach (Appointement::latest()->where('user_id', $id)->with(['user', 'hospital'])->get() as  $appointment) {
                //    if($appointment->start <= now()->addDay()){
                    if($appointment->start <= now()->addHours(1)){
                        $data="expired ...";
                   }elseif(!$appointment->is_validated){
                        $data="waiting validation ...";
                   }else{
                    $data="validated ...";
                   }
                    $formattedAppointment = [
                        'id' => $appointment->id,
                        'hospital' => $appointment->hospital->name,
                        'start' => $date = $appointment->FormatDate($appointment->start),
                        // 'HourBegin' => $appointment->start->Carbon::format('H:i:s'),
                        'end' => $appointment->end ? $appointment->FormatDate($appointment->end) : null,
                        'validated' => $data,
                    ];
                    array_push($formattedAppointments, $formattedAppointment);
                }
                return response()->json([
                    'Staus' => 'true',
                    'appointments' => $formattedAppointments,
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'Staus' => 'false',
                'message' => $e->getMessage(),
            ]);
        }
    }
}
