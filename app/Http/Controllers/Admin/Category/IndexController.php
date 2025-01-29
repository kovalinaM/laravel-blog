<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('admin.categories.index');
    }
}
