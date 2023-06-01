<?php

namespace App\Http\Controllers\API\front\users;



use App\Models\User;
use Laravolt\Avatar\Facade as Avatar;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use App\Notifications\front\RegisterUserNotification;

class AuthentificationController extends Controller
{
    /**
     * function to login
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
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->role->name,
                    'avatar' =>  $user->avatar,
                    'status' => 'true',
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
     *
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'birth_date' => 'nullable|date|before:' . now()->subYears(18)->format('d-m-Y'),
            'phone_number' => 'nullable|numeric|unique:users,phone_number|digits:9|starts_with:65,67,68,69,66,232',
            'groupBlood' => ['nullable', Rule::in(array_keys(User::GROUPBLOOD))],
            'location' => ['nullable', 'exists:cities,id'],
        ]);

        try {

            if (User::where('email', $request->email)->first()) {
                return response()->json([
                    'Staus' => 'exist',
                    'message' => 'User already exists',
                ]);
            } else {

                //    problem with groupBlood
                $data = [
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                    'email' => $request->email,
                    'location' => $request->location ? $request->location : null,
                    'phone_number' => $request->phone_number  ? "+237" . $request->phone_number : null,
                    'groupBlood' => $request->groupBlood ? $request->groupBlood : null,
                    'birth_date' => $request->birth_date ? $request->birth_date : null,
                    'role_id' => 3, //donor
                    // 'avatar' => fake()->image(storage_path('app/public/users/avatars/'), 500, 500, $request->name, false),
                ];
                $user = User::create($data);
                $user->avatar = Avatar::create($request->name)->save(storage_path('app/public/users/avatars/' . uniqid($request->name) . '.png', $quality = 100));
                // $user->avatar = Avatar::create($request->name)->save(storage_path('app/public/users/avatars/' . $request->name . '.png', $quality = 100));
                $token = $user->createToken('auth_token')->plainTextToken;
                Notification::send($user, new RegisterUserNotification);
                Auth::login($user);

                return response()->json([
                    'id' => $user->id,
                    'name' => $user->name,
                    'Staus' => 'true',
                    'email' => $user->email,
                    'groupBlood' => $user->groupBlood ? $request->groupBlood : null, //faire les correspondances
                    'role' => $user->role->name,
                    'avatar' =>  $user->avatar,
                    'token' => $token,
                    'message' => 'User successfully registered',

                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'Staus' => 'false',
                'message' => $e->getMessage(),
            ]);
        }
    }
    /**
     *
     */
    public function cities()
    {
        try {

            return response()->json([
                'Staus' => 'true',
                'cities' => DB::table('cities')->where('country_id', 38)->orderBy('name', 'asc')->get(),
                // return all cities
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Staus' => 'false',
                'message' => $e->getMessage(),
            ]);
        }
    }
    public function states()
    {
        try {
            return response()->json([
                'Staus' => 'true',
                'cities' => DB::table('states')->where('country_id', 38)->orderBy('name', 'asc')->get(),

            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Staus' => 'false',
                'message' => $e->getMessage(),
            ]);
        }
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
