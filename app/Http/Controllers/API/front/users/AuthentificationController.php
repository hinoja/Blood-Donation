<?php

namespace App\Http\Controllers\API\front\users;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
                    'name' => $user->name,
                    'role' => $user->role->name,
                    'id' => $user->id,
                    'token' => $token,
                ];
            } elseif (Hash::check($request->password, $user->password) && !$user->is_active) {
                $data = [
                    'status' => 'false',
                    'message' => 'Your account is disable, Please contact administrator',
                ];
            } else {
                $data = [
                    'status' => 'false',
                    'message' => 'These credentials do not match our records.',
                ];
            }
        } else {
            $data = [
                'status' => 'false',
                'message' => 'These credentials do not match our records.',
            ];
        }

        return response()->json($data);
    }
    /**
     * detroy  user account
     */

    public function destroy(Request $request, $id)
    {
        try {

            $user = User::find($id);

            // $user = $request->user();
            if (!$user) {
                $staus = "false";
                $message = trans("We can't find this user in Database.");
            } else {
                Auth::logout();
                $token = DB::table('personal_access_tokens')->where('tokenable_id', $user->id)->first();
                if ($token) {
                    $token->delete();
                }
                $user->appointements()->delete();
                foreach ($user->posts as  $post) {
                    $post->tags()->detach();
                }
                $user->posts()->delete();
                $user->delete();
                // $request->session()->invalidate();
                // $request->session()->regenerateToken();
                $staus = "true";
                $message = trans("The account has been deleted");
            }
        } catch (\Exception $e) {
            $staus = "true";
            $message =  $e->getMessage();
        }
        return response()->json([
            'Staus' => $staus,
            'message' => $message
        ]);
    }


    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
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
