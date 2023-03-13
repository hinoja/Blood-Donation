<?php

namespace App\Http\Controllers\API\front\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthentificationController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password) && $user->is_active) {
                $token = $user->createToken('auth_token')->plainTextToken;
                Auth::login($user);
                $data = [
                    'status' => 'true',
                    'message' => 'Hello ' . $user->name,
                    'token' => $token
                ];
            } elseif (Hash::check($request->password, $user->password) && !$user->is_active) {
                $data = [
                    'status' => 'false',
                    'message' => 'Your account is disable, Please contact administrator'
                ];
            } else {
                $data = [
                    'status' => 'false',
                    'message' => 'These credentials do not match our records.'
                ];
            }
        } else {
            $data = [
                'status' => 'false',
                'message' => 'These credentials do not match our records.'
            ];
        }

        return response()->json($data);
    }

    public function logout(Request $request)
    {
        try {
            // Revoke the token that was used to authenticate the current request...
            $request->user()->currentAccessToken()->delete();

            return response()->json([
                'Staus' => 'true',
                'message' => 'User successfully loggged out',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Staus' => 'false',
                'message' => $e->getMessage(),
            ]);
        }
    }
}
