<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::inRandomOrder()->limit(4)->get();

        $likedPosts = Post::withCount('likedUsers')
            ->orderByDesc('liked_users_count')
            ->limit(4)
            ->get();

        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
