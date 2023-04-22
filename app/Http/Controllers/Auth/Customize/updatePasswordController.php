<?php

namespace App\Http\Controllers\Auth\Customize;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class updatePasswordController extends Controller
{
    // public function showFormUpdate($token)
    // {
    //     return view('ResetPasswordPage', ['token' => $token]);
    // }
    public function updating(Request $request)
    {
        dd('test');
        $data = $request->validate([
            'token' => ['required'],
            'email' => ['email', 'required', 'string', 'exists:users'],
            // 'password' => ['min:8', 'confirmed', 'string', 'required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required']
        ]);
        // $password_reset_request = DB::table('password_reset_tokens')->where([
        //     'token' => $request->token,
        //     'email' => $data['email']
        // ])->first();
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                if ($user instanceof MustVerifyEmail && !$user->hasVerifiedEmail()) {
                    $user->sendEmailVerificationNotification();
                }
            }
        );

        // if (!$password_reset_request) {
        //     return back()->with('danger', 'Invalid Token');
        // }


        // $request->user()->update([
        //     'password' => Hash::make($data['password']),
        // ]);

        // DB::table('password_reset_tokens')->where('email', $request->email)->delete();
        // toast(trans('Password has been successfully updated.'), 'success');
        // return redirect()->route('login');



        // $status == Password::PASSWORD_RESET;
        // if ($status) {
        //     return  redirect()->route('login')->with('status', __($status));
        // } else {
        //     dd(back()->withInput($request->only('email'))->withErrors(['email' => __($status)]));
        //     Alert::alert('error', back()->withInput($request->only('email'))->withErrors(['email' => __($status)]))->autoclose(7000);
        //     return back();
        // }

        return back();

        // ? redirect()->route('login')->with('status', __($status))
        // : back()->withInput($request->only('email'))
        //         ->withErrors(['email' => __($status)]);
    }
}
