<?php

namespace App\Http\Controllers\API;

use DateTime;

use Carbon\Carbon;
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
            'userId' => ['required', 'integer', 'exists:users,id'],
            'hospitalId' => ['required', 'integer'],
            'start' => ['required', 'after_or_equal:now()'],
        ]);
        $var = str_replace('/', '-', $data['start']);
        $data['start'] = date('Y-m-d', strtotime($var));
        // $newdate = date("Y/m/d H:i", $sec);
        // $newdate = $newdate . ":00";
        // $data['start'] = $newdate;
        $user = User::find($data['userId']);
        $hospital = Hospital::find($data['hospitalId']);
        try {
            if (!$hospital) {

                $staus = 'false';
                $message = "Hospital id  is incorrect";
            } else {
                Appointement::create([
                    'hospital_id' => $data['hospitalId'],
                    'user_id' => $data['userId'],
                    'start' => $data['start']
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
                    if ($appointment->start <= now()) {
                        $data = "expired ...";
                    }
                    if (!$appointment->is_validated) {
                        $data = "waiting validation ...";
                    }
                    if ($appointment->is_validated) {
                        $data = "validated ...";
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
