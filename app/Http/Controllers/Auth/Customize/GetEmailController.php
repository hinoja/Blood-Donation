<?php

namespace App\Http\Controllers\Auth\Customize;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Notification;
use App\Notifications\password\Front\ResetPasswordNotification;

class GetEmailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data =  $request->validate([
            // 'email' => ['required', 'string', 'email', 'exists:users,email']
            'email' => ['required', 'string', 'email']
        ]);
        $user = User::where('email', $data['email'])->first();
        if ($user) {
            $token = Str::random(64);
            $exists = DB::table('password_reset_tokens')->where(
                'email',
                $data['email']
            )->first();
            if ($exists) {
                $exists->email = $data['email'];
                $exists->token = $token;
                $exists->created_at = Carbon::now();
            } else {
                DB::table('password_reset_tokens')->insert([
                    'email' => $data['email'],
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);
            }
            $user = User::where('email', $data['email'])->first();
            // Mail::send('','');
            Notification::send($user, new ResetPasswordNotification($token));
            Alert::alert('success', trans('Your have received a email on your mailBox,Please verify'))->autoclose(7000);
        } else {
            Alert::alert('error', trans('We can\'t find a user with that email address.'))->autoclose(7000);
        }

        // Alert::alert('success', trans('Your message has been successfully sent to the platform administrator. You will receive an email as soon as possible.'), 'success')->autoclose(7000);

        // Alert::alert('warning', trans('Your message has been successfully sent to the platform administrator. You will receive an email as soon as possible.'), 'success')->autoclose(7000);

        return back();
    }
}
