<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Post;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class PostsManage extends Component
{
    use LivewireAlert,WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $deleteId, $post, $nameDelete;

    public function closeModal()
    {
        // $this->reset();
        // $this->resetErrorBag();
        // $this->resetValidation();
        $this->emit('closeModal');
    }
    public function showDeleteForm(Post $post)
    {
        // $this->resetErrorBag();
        $this->emit('openDeleteModal');
        $this->deleteId = $post->id;
        $this->nameDelete = $post->title;
        // dd($post);
    }
    public function destroyPost()
    {
        // select sub-category
        $post = Post::query()->find($this->deleteId);
        $post->tags()->detach();
        // $post->subCategories()->delete();
        $post->delete();
        // dd('test');
        $this->closeModal();
        toast(trans('The post has been successfully deleted'),'success');
        // return redirect()->route('admin.posts.index');

        // toast(trans('Job has been successfully created.'), 'success');

    }
    public function render()
    {
        return view('livewire.admin.posts.posts-manage', ['posts' => Post::query()->with('user')->paginate(7)]);
    }
}
