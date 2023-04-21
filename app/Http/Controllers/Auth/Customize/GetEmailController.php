<?php

namespace App\Http\Controllers\Auth\Customize;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
            'email' => ['required', 'string', 'email', 'exists:users,email']
        ]);
        $token = Str::random(64);
        DB::table('password_reset_tokens')->insert([
            'email' => $data['email'],
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        $user = User::where('email', $data['email'])->first();
        // Mail::send('','');
        Notification::send($user, new ResetPasswordNotification($token));

        return back()->with('success', 'Your have received a email on your mailBox,Please verify');
    }
}
