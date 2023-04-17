<?php

namespace App\Http\Controllers\Admin\posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.posts.add', ['tags' => Tag::select('name', 'id')
            ->latest()
            ->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $data = $request->validate([
            'tags_name' => ['distinct'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:1500'],
            'title' => ['required', 'max:255', 'string', 'unique:posts,title'],
            'content' => ['required', 'string', 'min:100'],
        ]);
        dd('test');
        $filename = (Str::slug($data['title'])).'.'.$data['image']->extension();
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

        foreach ($data['tags_name'] as $tag) {
            $post->tags()->attach($tag);
        }
        // $post->tags->attach($data['name']);
        $post->image = $filename;
        $post->published_at = now();
        $post->save();

        // dd($post);
        $data['image']->storeAs('public/posts', $filename);
        $this->alert('success', trans('The post has been successfully created'));

        // toast(trans('Job has been successfully created.'), 'success');
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255', 'string', 'unique:posts,title,'.$post->id.''],
            'name' => ['required', 'string', 'distinct'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:1500'],
            'content' => ['required', 'string', 'min:255'],
        ]);
        // dd($data);
        $filename = (Str::slug($data['title'])).'.'.$data['image']->extension();
        // dd('test');
        $post = Post::find($post->id)->update([
            'title' => $data['title'],
            $slug = 'slug' => Str::slug($data['title']),
            'content' => $data['content'],
            // 'image' => "posts",
            // 'image' => "public/posts/" . $slug,
            'user_id' => Auth::user()->id,
            // 'published_at' => now()
        ]);
        $post->image = $filename;
        $post->published_at = now();
        $post->save();

        $data['image']->storeAs('public/posts', $filename);
        $tag = Tag::create([
            'name' => $data['name'],
        ]);
        $post->tags()->attach($tag);
        toast(trans('Job has been successfully updated.'), 'success');
        dd($post);

        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
