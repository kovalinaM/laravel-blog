@extends('admin.layouts.main')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6 d-flex align-items-center gap-1">
                    <h3 class="mb-0">{{$post->title}}</h3>
                    <a href="{{route('admin.post.edit', $post->id)}}" class="text-success"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{route('admin.post.delete', $post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="bi bi-trash text-danger" role="button"></i>
                        </button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Посты</li>
                        <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
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
            <div class="col-6">
                <div class="card mb-4">
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <tbody>
                            <tr class="align-middle">
                                <td>ID</td>
                                <td>{{$post->id}}</td>
                            </tr>
                            <tr class="align-middle">
                                <td>Название</td>
                                <td>{{$post->title}}</td>
                            </tr>
                            <tr class="align-middle">
                                <td>Текст</td>
                                <td>{{$post->content}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
        <!-- /.row (main row) -->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
@endsection
