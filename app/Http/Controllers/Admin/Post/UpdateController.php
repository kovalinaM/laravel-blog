<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $data = $request->validated();
        $post->update($data);
        return view('admin.post.show', compact('post'));
    }
}
