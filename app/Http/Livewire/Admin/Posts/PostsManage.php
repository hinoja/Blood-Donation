<?php

namespace App\Http\Livewire\Admin\Posts;



use App\Models\Post;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class PostsManage extends Component
{
    use LivewireAlert, WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $deleteId, $post, $nameDelete;
    // edit fields
    public $tag, $title, $image, $content, $published_at;
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
    public function destroyPost()
    {
        $post = Post::query()->find($this->deleteId);
        // unlink(public_path('storage/posts' . $post->image));
        File::delete('storage/posts' . $post->image);
        $post->tags()->detach();

        $post->delete();

        $this->closeModal();
        $this->alert('success', trans('The post has been successfully deleted'));

        // toast(trans('Job has been successfully created.'), 'success');

    }
    public function editPost(Post $post)
    {
        // dd('test');
        return view('admin.posts.edit',['title'=>$post->title,
                                                    'image'=>$post->image,
                                                    'content'=>$post->content,
                                                    'tags'=>$post->tags]);
    }
    public function render()
    {
        return view('livewire.admin.posts.posts-manage', ['posts' => Post::query()
                                                                                ->with('user')
                                                                                ->latest()
                                                                                ->paginate(7)]);
    }
}
