<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditComponentPost extends Component
{
    use WithFileUploads, LivewireAlert;
    public $content, $title, $image, $tags_name, $tags, $post, $imageDispay;
    public function mount(Post $post)
    {
        // $student = Post::where('id', $id)->first();
        $this->post = $post;
        $this->content = $post->content;
        $this->title = $post->title;
        $this->imageDispay = $post->image;
        $this->tags = $post->tags;

        // $this->student_edit_id = $student->id;
    }
    public function UpdatePost()
    {

        $data = $this->validate([
            'content' => ['required', 'string', 'min:500'],
            'tags_name' => ['nullable', 'exists:tags,id', 'distinct'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif', 'max:1500'],
            'title' => ['required', 'max:255', 'unique:posts,title,' . $this->post->id . '', 'string'],
        ]);
        $postUpdate = Post::find($this->post->id)
        ->Update([
            'title' => $data['title'],
            'slug' => Str::slug($data['title']),
            'content' => $data['content'],
            // 'image' => "storage/posts/" . $filename,
            'user_id' => Auth::user()->id,
            // 'published_at' => null
        ]);
        if ($data['tags_name']) {
            foreach ($data['tags_name'] as $tag) {
                $this->post->tags()->attach($tag);
            }
        }
        if($this->image){
          $filename = (Str::slug($data['title'])) . '.' . $this->image->extension();
        $this->image->storeAs('public/posts', $filename);
        $this->post->image =  $filename;
      }
       $this->post->published_at = null;
       $this->post->save();
        $this->alert('success', trans('The post has been successfully Updated'));
        // toast(trans('Post has been successfully created.'), 'success');
        return redirect()->route('admin.posts.index');
    }
    public function render()
    {
        return view('livewire.admin.posts.edit-component-post', ['tags' => $this->tags])->layout('livewire.layouts.base');
    }
}
