<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class DeleteController extends Controller
{
    public function __invoke(User $user): \Illuminate\Http\RedirectResponse
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
