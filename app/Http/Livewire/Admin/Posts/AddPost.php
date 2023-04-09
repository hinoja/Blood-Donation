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
    public $tags_name, $image, $title, $content;
    public function storePost()
    {

        $data = $this->validate([
            'tags_name' => ['exists:tags,id'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:1500'],
            'title' => ['required', 'max:255', 'string', 'unique:posts,title'],
            'content' => [ 'required']
        ]);
        dd($data);
        $filename = (Str::slug($data['title'])) . '.' . $this->image->extension();
        // dd('test');
        $post = Post::create([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'content' => $data['content'],
            // 'image' => "posts",
            // 'image' => "public/posts/" . $slug,
            'user_id' => Auth::user()->id,
            // 'published_at' => now()
        ]);

        foreach ($data['tag'] as $tag) {
            $post->tags()->attach($tag);
        }
        // $post->tags->attach($data['name']);
        $post->image =  $filename;
        $post->published_at = now();
        $post->save();

        // dd($post);
        $this->image->storeAs('public/posts', $filename);
        $this->alert('success', trans('The post has been successfully created'));


        // toast(trans('Job has been successfully created.'), 'success');
        return redirect()->route('admin.posts.index');
    }
    public function render()
    {
        return view('livewire.admin.posts.add-post', ['tags' => Tag::all()]);
    }
}
