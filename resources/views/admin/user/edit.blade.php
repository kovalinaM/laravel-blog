@extends('admin.layouts.main')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Редактирование профиля пользователя</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Редактирование профиля пользователя</li>
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
            <form action="{{route('user.update', $user->id)}}" method="POST" class="col-4">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="name">Ваше имя</label>
                    <input name="name" type="text" class="form-control" value="{{$user->name}}">
                    @error('name')
                        <div class="text-danger">
                            Это поле не должно быть пустым!
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" value="{{$user->email}}">
                    @error('email')
                    <div class="text-danger">
                        Это поле не должно быть пустым!
                    </div>
                    @enderror
                </div>
{{--                <div class="mb-3">--}}
{{--                    <label for="password">Пароль</label>--}}
{{--                    <input name="password" type="password" class="form-control" value="{{$user->password}}">--}}
{{--                    @error('password')--}}
{{--                    <div class="text-danger">--}}
{{--                        Это поле не должно быть пустым!--}}
{{--                    </div>--}}
{{--                    @enderror--}}
{{--                </div>--}}
                <div class="mb-3 col-md-6">
                    <label class="form-label">Выберите роль</label>
                    <select name="role" class="form-select" id="role" required="">
                        @foreach($roles as $id => $role)
                            <option value="{{$id}}"
                                {{$id == $user-> role ? ' selected' : ''}}
                            >{{$role}}
                            </option>
                        @endforeach
                    </select>
                    @error('role')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3 w-50">
                    <input type="hidden" name="user_id" value="{{$user->id}}">
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
