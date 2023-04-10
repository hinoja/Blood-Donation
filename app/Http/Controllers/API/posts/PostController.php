<?php

namespace App\Http\Controllers\API\posts;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function __invoke(Request $request)
    {
        $posts = Post::whereNotNull('published_at')
            ->with('user')
            ->latest()
            ->get();
        $formattedPosts = [];
        foreach ($posts as $post) {

            $formattedPost = [
                'title' => $post->title,
                'slug' => $post->slug,
                'image' => public_path('storage/posts/' . $post->image),
                'content' => $post->content,
                'published_at' => $post->FormatDate($post->published_at),
                'Author' => $post->user->name,
                'created_at' => $post->FormatDate($post->created_at),
            ];
            array_push($formattedPosts, $formattedPost);
        }
        return response()->json([
            'status' => "true",
            'posts' => $formattedPosts,
        ]);
    }
}
