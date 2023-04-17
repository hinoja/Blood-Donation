<?php

namespace App\Http\Controllers\Api\users;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class ProfileController extends Controller
{
    public function getProfile($id)
    {
        try {
            $user = User::find($id);
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
    public function updateProfile(Request $request ,$id)
    {
        
    }
}
