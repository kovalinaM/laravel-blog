<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data, $request) {
        try {
            Db::beginTransaction();
            $tagsIds = $data['tag_ids'] ?? [];
            unset($data['tag_ids']);

            $previewImagePath = $request->file('preview_image')->store('images', 'public');
            $mainImagePath = $request->file('main_image')->store('images', 'public');

            $data['preview_image'] = $previewImagePath;
            $data['main_image'] = $mainImagePath;

            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagsIds);
            Db::commit();
        } catch (\Exception $e) {
            Db::rollBack();
            report($e);
            return back()->withErrors(['error' => 'Не удалось создать пост']);
        }
    }

    public function update($data, $post, $request) {
        try {
            Db::beginTransaction();
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

            Db::commit();
        } catch (\Exception $e) {
            Db::rollBack();
            report($e);
            return back()->withErrors(['error' => 'Не удалось обновить пост']);
        }

        return $post;
    }
}
