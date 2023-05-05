<?php

namespace App\Http\Controllers\API;

use App\Models\User;

use App\Http\Controllers\Controller;
use App\Models\Appointement;

class UserAppointmentsController extends Controller
{
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
                foreach (Appointement::where('user_id', $id)->with(['user', 'hospital'])->get() as  $appointment) {
                    $formattedAppointment = [
                        'id' => $appointment->id,
                        'hospital' => $appointment->hospital->name,
                        'start' => $date = $appointment->FormatDate($appointment->start),
                        // 'HourBegin' => $appointment->start->Carbon::format('H:i:s'),
                        'end' => $appointment->end ? $appointment->FormatDate($appointment->end) : null,
                        'validated' => ( $appointment->start < now()->addDay()) ? "no-validated" : $appointment->is_validated,
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
