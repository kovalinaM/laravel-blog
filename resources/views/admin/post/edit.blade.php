@extends('admin.layouts.main')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Редактирование поста</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Посты</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Редактирование поста</li>
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
            <form action="{{route('post.update', $post->id)}}" method="POST" class="col-4">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <input name="title" type="text" class="form-control"  value="{{$post->title}}">
                    @error('title')
                        <div class="text-danger">
                            Это поле не должно быть пустым!
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <textarea id="summernote" name="content">
                        {{old('content')}}
                    </textarea>
                    @error('content')
                    <div class="text-danger">
                        Это поле не должно быть пустым!
                    </div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>
        <!-- /.row (main row) -->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
@endsection
