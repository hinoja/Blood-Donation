<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.users.index', ['users' => User::query()->latest()->select('email', 'name', 'is_active')->get()]);
    }
}
