<?php

namespace App\Http\Livewire\Front\Home;

use App\Models\Post;
use Livewire\Component;

class BlogSection extends Component
{
    // public $posts;
    public function render()
    {

        return view('livewire.front.home.blog-section', ['posts' =>  Post::OrderBy('id', 'desc')
                                                                                                ->whereNotNull('published_at')
                                                                                                ->latest()
                                                                                                ->limit(3)
                                                                                                ->get()]);
    }
}
