<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class DeleteController extends BaseController
{
    public function __invoke(Post $post): \Illuminate\Http\RedirectResponse
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
