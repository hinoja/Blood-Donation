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
use Illuminate\Support\Facades\Lang;

class updatePasswordController extends Controller
{
    // public function showFormUpdate($token)
    // {
    //     return view('ResetPasswordPage', ['token' => $token]);
    // }
    public function updating(Request $request)
    {

        $data = $request->validate([
            'token' => ['required'],
            'email' => ['email', 'required', 'string', 'exists:password_reset_tokens'],
            // 'password' => ['min:8', 'confirmed', 'string', 'required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required']
        ]);
        $password_reset_request = DB::table('password_reset_tokens')->where([
            // 'token' => $request->token,
            'email' => $data['email']
        ])->first();


        if (!$password_reset_request) {
            Alert::warning('Error', trans('credentials account is incorrect'))->autoclose(7000);
            return back();
        } else {
            $user = User::where('email', $request->email)->first();
            $user->password = Hash::make($request->password);
            $user->save();
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();
            Alert::success('Good job', trans('Password has been successfully updated.'))->autoclose(7000);

            return redirect()->route('login');
        }

    
    }
}
