<?php

namespace App\Http\Controllers\Api\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class updatePasswordController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'token' => 'required|exists:password_reset_tokens',
            'password' => ['min:8',  'string', 'required'],
            // 'password_confirmation' => ['required'],
        ]);
        $password_reset_request = DB::table('password_reset_tokens')->where([
            'token' => $data['token'],
            // 'email' => $data['email']
        ])->first();
        // check if it does not expired: the time is one hour
        if ($password_reset_request->created_at > now()->addHour()) {
            $password_reset_request->delete();
            $status = 'false';
            $message = trans('passwords.code_is_expire');
        } elseif (! $password_reset_request) {
            $status = 'false';
            $message = trans('Invalid Code');
        }
        $email = $password_reset_request->email;
        User::where('email', $password_reset_request->email)->update([
            'password' => Hash::make($data['password']),
        ]);
        DB::table('password_reset_tokens')->where('token', $email)->delete();

        $status = 'true';
        $message = trans('Password has been successfully updated.');

        return response()->json([
            'status' => $status,
            'message' => $message,
        ]);
    }
}
