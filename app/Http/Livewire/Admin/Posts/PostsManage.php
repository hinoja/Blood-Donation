<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class PostsManage extends Component
{
    use LivewireAlert, WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $deleteId,$post, $nameDelete;

    // edit fields
    public $publishPost; //publish

    public function closeModal()
    {
        $this->emit('closeModal');
    }

    public function showDeleteForm(Post $post)
    {
        $this->emit('openDeleteModal');
        $this->deleteId = $post->id;
        $this->nameDelete = $post->title;
    }

    public function showPublishForm(Post $post)
    {
        $this->emit('openPublishModal');
        $this->publishPost = $post;
    }

    public function PublishPost()
    {
        $post = Post::find($this->publishPost->id);
        if ($post->published_at) {
            $post->published_at = null;
            $message = 'The post has been successfully unpublished';
        } else {
            $post->published_at = now();
            $message = 'The post has been successfully published';
        }
        $post->save();

        $this->closeModal();
        $this->alert('success', trans($message));

        // toast(trans('Job has been successfully created.'), 'success');
    }

    public function destroyPost()
    {
        $post = Post::query()->find($this->deleteId);
        // unlink(public_path('storage/posts' . $post->image));
        File::delete('storage/posts'.$post->image);
        $post->tags()->detach();

        $post->delete();

        $this->closeModal();
        $this->alert('success', trans('The post has been successfully deleted'));

        toast(trans('The post has been successfully deleted'), 'success');
    }

    public function editPost(Post $post)
    {
        // dd('test');
        return view('admin.posts.edit', [
            'title' => $post->title,
            'image' => $post->image,
            'content' => $post->content,
            'tags' => $post->tags,
        ]);
    }

    public function render()
    {
        return view('livewire.admin.posts.posts-manage', ['posts' => Post::query()
            ->with('user')
            ->latest()
            ->paginate(7)]);
    }
}
