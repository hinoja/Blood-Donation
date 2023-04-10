<?php

namespace App\Http\Controllers\API\front\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthentificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Post(
     * path="/api/login",
     * summary="Sign in",
     * description="Login by email and  password",
     * operationId="authLogin",
     * tags={"login"},
     *    description="Pass user credentials",
     * @OA\RequestBody(
     *   required=true,
     *    description="login here",
     *    @OA\Schema(
     *    required={"email","password"},
     *    @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     *    @OA\Property(property="password", type="string", format="password", example="PassWord12345"),
     * ),
     *    @OA\JsonContent(
     *       required={"email","password"},
     *       @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     *       @OA\Property(property="password", type="string", format="password", example="PassWord12345"),
     *    ),
     *
     * ),
     * @OA\Response(
     *    response=422,
     *    description="good back response of server",
     *    @OA\JsonContent(
     *       @OA\Property(property="status", type="string", example="true"),
     *       @OA\Property(property="message", type="string", example="Hello username"),
     *       @OA\Property(property="token", type="string", example="5|fka5ZOLVgnKRsY4UsMChFDGsdGlLzJYUOlQ8D0Vh"),
  ),
     *     ),
     * )
     */
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
                    'name' =>  $user->name,
                    'role' =>  $user->role->name,
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
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
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
