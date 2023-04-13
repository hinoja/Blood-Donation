<?php

namespace App\Http\Controllers\Admin\users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::query()
                ->with('role:id,name')
                ->get(),
        ]);
    }

    /**
     * Enable or disable user account
     */
    public function updateStatus(User $user): RedirectResponse
    {
        if ($user->is_active) {
            $user->is_active = false;
            $message = trans('Account has been successfully unblocked.');
        } else {
            $user->is_active = true;
            $message = trans('Account has been successfully blocked.');
        }
        $user->save();
        // Alert::success('Success Registered', $message);
        toast($message, 'success');


        return back();
    }
}
