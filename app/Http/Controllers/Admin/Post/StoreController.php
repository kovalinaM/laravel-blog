<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        $this->service->store($data, $request);

        return redirect()->route('admin.post.index');
    }
}
