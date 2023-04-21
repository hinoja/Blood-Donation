<?php

namespace App\Http\Controllers\Auth\Customize;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class updatePasswordController extends Controller
{
    public function showFormUpdate($token)
    {
        return view('ResetPasswordPage', ['token' => $token]);
    }
    public function updating(Request $request)
    {
        $data = $request->validate([
            // 'password_old'=>['min:8','required'],
            // 'email' => ['email', 'required', 'string', 'exists:users'],
            'password' => ['min:8', 'confirmed', 'string', 'required'],
            'password_confirmation' => ['required']
        ]);
        $password_reset_request = DB::table('password_reset_tokens')->where([
            'token' => $request->token,
            // 'email' => $data['email']
        ])->first();

        if (!$password_reset_request) {
            return back()->with('danger', 'Invalid Token');
        }


        $request->user()->update([
            'password' => Hash::make($data['password']),
        ]);

        DB::table('password_reset_tokens')->where('email', $request->email)->delete();
        toast(trans('Password has been successfully updated.'), 'success');
        return redirect()->route('login');
    }
}
