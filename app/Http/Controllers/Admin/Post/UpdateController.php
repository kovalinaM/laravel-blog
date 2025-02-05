<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $data = $request->validated();
        if (isset($data['tag_ids'])) {
            $tagsIds = $data['tag_ids'];
            unset($data['tag_ids']);
            $post->tags()->sync($tagsIds);
        };

        if ($request->hasFile('preview_image')) {
            Storage::disk('public')->delete($post->preview_image);
            $data['preview_image'] = $request->file('preview_image')->store('images', 'public');
        }

        if ($request->hasFile('main_image')) {
            Storage::disk('public')->delete($post->main_image);
            $data['main_image'] = $request->file('main_image')->store('images', 'public');
        }

        $post->update($data);
        return view('admin.post.show', compact('post'));
    }
}
