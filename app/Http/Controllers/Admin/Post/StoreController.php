<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        $previewImagePath = $request->file('preview_image')->store('images', 'public');
        $mainImagePath = $request->file('main_image')->store('images', 'public');

        $data['preview_image'] = $previewImagePath;
        $data['main_image'] = $mainImagePath;

        Post::firstOrCreate($data);
        return redirect()->route('post.index');
    }
}
