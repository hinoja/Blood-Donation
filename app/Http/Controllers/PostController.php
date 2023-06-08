<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $recent = Post::OrderBy('id', 'desc')
                                            ->whereNotNull('published_at')
                                            ->latest()
                                            ->limit(5)
                                            ->get();

        return view('front.blog.show', [
            'post' => $post,
            'recentsPost' => $recent,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}