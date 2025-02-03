<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('admin.post.create');
    }
}
