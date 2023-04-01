<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class UserManage extends Component
{
    use LivewireAlert;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function UpdateStatusUser(User $user)
    {
        if ($user->is_active) {
            $user->is_active = false;
            $message = trans('Account has been successfully blocked.');
        } else {
            $user->is_active = true;
            $message = trans('Account has been successfully unblocked.');
        }
        $user->save();
        $this->alert('success', $message);
    }

    public function render()
    {
        return view('livewire.admin.users.user-manage', ['users' => User::query()->with('role')->paginate(1000)]);
    }
}
