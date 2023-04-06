<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddPost extends Component
{
    use WithFileUploads, LivewireAlert;
    public $name, $image, $title, $content;
    public function storePost()
    {
        $data = $this->validate([
            'name' => ['required', 'string', 'distinct'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:512'],
            'title' => ['required', 'string', 'unique:posts,title'],
            'content' => ['required', 'string', 'min:255']
        ]);
        $filename = (Str::slug($data['title'])) . '_' . uniqid() . $this->image->extension();
        // dd('test');
        $post = Post::create([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            // 'image' => "filename",
            'image' => $filename,
            'content' => $data['content'],
            'user_id' => Auth::user()->id,
            'pusblished_at' => now(),
        ]);
        $this->image->storeAs('public/posts', $filename);
        $tag = Tag::create([
            'name' => $data['name']
        ]);
        $post->tags()->attach($tag);
        toast(trans('Job has been successfully created.'), 'success');
        return redirect()->route('admin.posts.index');
    }
    public function render()
    {
        return view('livewire.admin.posts.add-post');
    }
}
