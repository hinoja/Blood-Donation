<?php

namespace App\Http\Controllers\Api\users;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\password\ResetPasswordNotification;

class GetEmailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data =  $request->validate([
            'email' => ['required', 'email', 'exists:users,email']
        ]);
        // Delete all old code that user send before.
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        // Generate random code
        //  $code = Str::random(64);
        $code =  mt_rand(100000, 999999);

        DB::table('password_reset_tokens')->insert([
            'email' => $data['email'],
            'token' => $code,
            'created_at' => Carbon::now()
        ]);
        $user = User::where('email', $data['email'])->first();
        if ($user) {
            $status = "true";
            $message = trans('You have received a email on your mailBox,Please verify');
        } else {
            $status = "false";
            $message = trans('This email don\'t exist in database ');
        }

        // Send email to user
        Notification::send($user, new ResetPasswordNotification($code));

        return response()->json([
            'status' => $status,
            'message' => $message
        ]);
    }
}
