<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\SendPushNotification;
use Illuminate\Support\Facades\Notification;
use Kutia\Larafirebase\Facades\Larafirebase;

class WebNotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }

    // public function storeToken(Request $request)
    // {
    //     auth()->user()->update(['device_key'=>$request->token]);
    //     return response()->json(['Token successfully stored.']);
    // }

    // public function sendWebNotification(Request $request)
    // {
    //     $url = 'https://fcm.googleapis.com/fcm/send';
    //     $FcmToken = User::whereNotNull('device_key')->pluck('device_key')->all();

    //     $serverKey = 'AAAAvrKkQAY:APA91bGTS57tt3OjYpdW0J7XNOIvh1X27O8FgxbLHtr2OdGQq-F0NJJrZkG-XmReee42jftd-uBbV7Akj2jrj0KsbE5voR4UYW2tDanjvNyi11YiO9LIDzR9JkOcAg_llQN7f6v8uY0U';

    //     $data = [
    //         "registration_ids" => $FcmToken,
    //         "notification" => [
    //             "title" => $request->title,
    //             "body" => $request->body,
    //         ]
    //     ];
    //     $encodedData = json_encode($data);

    //     $headers = [
    //         'Authorization:key=' . $serverKey,
    //         'Content-Type: application/json',
    //     ];

    //     $ch = curl_init();

    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_POST, true);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    //     curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    //     // Disabling SSL Certificate support temporarly
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
    //     // Execute post
    //     $result = curl_exec($ch);
    //     if ($result === FALSE) {
    //         die('Curl failed: ' . curl_error($ch));
    //     }
    //     // Close connection
    //     curl_close($ch);
    //     // FCM response
    //     dd($result);
    // }

    public function updateToken(Request $request)
    {
        try {
            $request->user()->update(['fcm_token' => $request->token]);
            return response()->json([
                'success' => true
            ]);
        } catch (\Exception $e) {
            report($e);
            return response()->json([
                'success' => false
            ], 500);
        }
    }
    public function notification(Request $request)
    {

        $request->validate([
            'title' => ['required', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        try {
            $fcmTokens = User::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();

            //Notification::send(null,new SendPushNotification($request->title,$request->message,$fcmTokens));

            /* or */

            //auth()->user()->notify(new SendPushNotification($title,$message,$fcmTokens));

            /* or */

            // Larafirebase::withTitle($request->title)
            //     ->withBody($request->message)
            //     ->sendMessage($fcmTokens);
            Notification::send(null, new SendPushNotification($request->title, $request->message, $fcmTokens));
            // auth()->user()->notify(new SendPushNotification($request->title,$request->message,$fcmTokens));
            return redirect()->back();
        } catch (\Exception $e) {
            report($e);
            return redirect()->back()->with('error', 'Something goes wrong while sending notification.');
        }
    }
}
