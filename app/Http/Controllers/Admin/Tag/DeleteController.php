<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class DeleteController extends Controller
{
    public function __invoke(Tag $tag): \Illuminate\Http\RedirectResponse
    {
        $tag->delete();
        return redirect()->route('tag.index');
    }
}
