@extends('admin.layouts.main')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Добавление поста</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Посты</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Добавление поста</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
<!--begin::App Content-->
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-4">
                    <input name="title" type="text" class="form-control"  placeholder="Название поста"
                    value="{{old('title')}}">
                    @error('title')
                        <div class="text-danger">
                            Это поле не должно быть пустым!
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <textarea id="summernote" name="content" placeholder="Текст поста">
                        {{old('content')}}
                    </textarea>
                @error('content')
                    <div class="text-danger">
                        Это поле не должно быть пустым!
                    </div>
                    @enderror
                </div>
                <div class="mb-3 w-50">
                    <label for="">Добавить превью</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="preview_image">
                    </div>
                    @error('preview_image')
                    <div class="text-danger">
                        Необходимо загрузить изображение в формате .jpg, .png
                    </div>
                    @enderror
                </div>
                <div class="mb-3 w-50">
                    <label for="">Добавить главное изображение</label>
                    <div class="input-group mb-3 ">
                        <input type="file" class="form-control" name="main_image">
                    </div>
                    @error('main_image')
                    <div class="text-danger">
                        Необходимо загрузить изображение в формате .jpg, .png
                    </div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="category_id" class="form-label">Выберите категорию</label>
                    <select name="category_id" class="form-select" id="category_id" required="">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                            {{$category->id == old($category->id) ? ' selected' : ''}}
                            >{{$category->title}}
                            </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Пожалуйста, выберите категорию поста</div>
                </div>
                <div class="mb-3 w-50">
                    <label>Выберите теги</label>
                    <select class="js-example-basic-multiple w-50" name="tag_ids[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option {{is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>
        </div>
        <!-- /.row (main row) -->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
@endsection
