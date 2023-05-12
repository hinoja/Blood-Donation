<?php

namespace App\Http\Controllers\API\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class ProfileController extends Controller
{
    public function getProfile($id)
    {
        try {
            $user = User::find($id);
            if (!$user) {
                return response()->json([
                    'Staus' => 'false',
                    'message' => "Any User",
                ]);
            } else {
                return response()->json([
                    'Staus' => 'true',
                    // 'User' => $user,
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->role->name,
                    'avatar' =>  $user->avatar,
                    'status' => 'true',

                ]);
            }
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
