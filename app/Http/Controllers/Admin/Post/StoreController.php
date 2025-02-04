<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
            $data = $request->validated();
            $tagsIds = $data['tag_ids'] ?? [];
            unset($data['tag_ids']);

            $previewImagePath = $request->file('preview_image')->store('images', 'public');
            $mainImagePath = $request->file('main_image')->store('images', 'public');

            $data['preview_image'] = $previewImagePath;
            $data['main_image'] = $mainImagePath;

            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagsIds);
        } catch (\Exception $e) {
            report($e);
            return back()->withErrors(['error' => 'Не удалось создать пост']);
        }

        return redirect()->route('post.index');
    }
}
