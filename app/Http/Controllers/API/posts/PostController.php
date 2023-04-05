<?php

namespace App\Http\Controllers\API\posts;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::whereNotNull('published_at')
            //  ->where('id')
            ->get();

        return response()->json([
            'status' => "true",
            'posts' => $posts,
        ]);
    }
}
