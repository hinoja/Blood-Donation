<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPost extends Component
{
    use WithFileUploads, LivewireAlert;

    public $tags_name;

    public $image;

    public $title;

    public $content;

    public function storePost()
    {
        $data = $this->validate([
            'content' => ['required', 'string', 'min:500'],
            'tags_name' => ['nullable', 'exists:tags,id', 'distinct'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:1500'],
            'title' => ['required', 'max:255', 'string', 'unique:posts,title'],
        ]);
        // dd($data);
        $filename = (Str::slug($data['title'])).'.'.$this->image->extension();
        $post = Post::create([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'content' => $data['content'],
            // 'image' => "public/posts/" . $slug,
            'user_id' => Auth::user()->id,
            // 'published_at' => now()
        ]);
        if ($data['tags_name']) {
            foreach ($data['tags_name'] as $tag) {
                $post->tags()->attach($tag);
            }
        }
        $post->image = $filename;
        $post->published_at = null;
        $post->save();
        $this->image->storeAs('public/posts', $filename);
        // $this->alert('success', trans('The post has been successfully created'));
        toast(trans('Post has been successfully created.'), 'success');

        return redirect()->route('admin.posts.index');
    }

    public function render()
    {
        return view('livewire.admin.posts.add-post', ['tags' => Tag::all()]);
    }
}
