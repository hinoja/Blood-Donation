<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Post;
use Livewire\Component;

class PostsManage extends Component
{
    public function render()
    {
        return view('livewire.admin.posts.posts-manage', ['posts' => Post::query()->with('user')->paginate(1000)]);
    }
}
