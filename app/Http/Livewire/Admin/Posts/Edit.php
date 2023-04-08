<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Tag;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Edit extends Component
{

    use WithFileUploads, LivewireAlert;
    public $name, $image, $title, $content;
    public $post;

    public function storePost()
    {
        $data = $this->validate([
            'name' => ['required', 'string', 'distinct'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:1500'],
            'title' => ['required', 'max:255', 'string', 'unique:posts,title'],
            'content' => ['required', 'string', 'min:255']
        ]);
        // dd($data);
        $filename = (Str::slug($data['title'])) . '.' . $this->image->extension();
        // dd('test');
        $post = Post::create([
            'title' => $data['title'],
            $slug = 'slug' => Str::slug($data['title']),
            'content' => $data['content'],
            // 'image' => "posts",
            // 'image' => "public/posts/" . $slug,
            'user_id' => Auth::user()->id,
            // 'published_at' => now()
        ]);
        $post->image =  $filename;
        $post->published_at = now();
        $post->save();

        // dd($post);
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
        return view('livewire.admin.posts.edit'
        ,['post'=>$this->post]
    );
    }
}
