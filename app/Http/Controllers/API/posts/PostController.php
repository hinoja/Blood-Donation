<?php

namespace App\Http\Controllers\API\posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $posts = Post::whereNotNull('published_at')
                ->with('user')
                ->latest()
                ->get();
            $formattedPosts = [];
            foreach ($posts as $post) {
                $formattedPost = [
                    'id' => $post->id,
                    'title' => $post->title,
                    'slug' => $post->slug,
                    'image' => env('APP_URL') . '/storage/posts/' . $post->image,
                    'content' => $post->content,
                    'published_at' => $post->FormatDate($post->published_at),
                    'Author' => $post->user->name,
                    'created_at' => $post->FormatDate($post->created_at),
                ];
                array_push($formattedPosts, $formattedPost);
            }
            return response()->json([
                'status' => 'true',
                'posts' => $formattedPosts,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'Staus' => 'false',
                'message' => $e->getMessage(),
            ]);
        }
    }
}
