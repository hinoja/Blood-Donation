<?php

namespace App\Http\Controllers\Api\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class ProfileController extends Controller
{
    public function getProfile($id)
    {
        try {
            $user = User::find($id);
                // dd($user);
            return response()->json([
                'Staus' => 'true',
                'User' => $user,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Staus' => 'false',
                'message' => $e->getMessage(),
            ]);
        }
    }
        // public function updateProfile(Request $request, $id)
    // {
    //     $user = User::find($id);
    //     if ($user) {
    //         $user->name= $request->name;
    //         $user->email= $request->email;
    //         $user->location= $request->location;
    //         $status = "true";
    //         $message = trans('User data has been successfully updated.');
    //     } else {
    //         $status = "false";
    //         $message = trans('This user don\'t exist in database');
    //     }
    //     return response()->json([
    //         'Staus' => $status,
    //         'message' => $message,
    //     ]);
    // }
}
