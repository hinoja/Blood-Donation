<?php

namespace App\Http\Livewire\Front\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ListPost extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.front.posts.list-post', ['posts' => Post::query()
                                                                                    ->whereNotNull('published_at')
                                                                                    ->latest()
                                                                                    ->paginate(6)]);
    }
}
