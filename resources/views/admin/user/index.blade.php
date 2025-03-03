@extends('admin.layouts.main')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Пользователи</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Пользователи</li>
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
            <div class="col-12">
                <a  href="{{route('user.create')}}" class="btn btn-primary mb-2">Добавить</a>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card mb-4">
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Имя пользователя</th>
                                <th colspan="3" class="text-center">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr class="align-middle">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td class="text-center"><a href="{{route('user.show', $user->id)}}"><i class="bi bi-eye-fill"></i></a></td>
                                <td class="text-center"><a href="{{route('user.edit', $user->id)}}" class="text-success"><i class="bi bi-pencil-square"></i></a></td>
                                <td class="text-center">
                                    <form action="{{route('user.delete', $user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                            <i class="bi bi-trash text-danger" role="button"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
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
