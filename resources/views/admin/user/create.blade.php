@extends('admin.layouts.main')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Добавление пользователя</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Добавление пользователя</li>
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
            <form action="{{route('user.store')}}" method="POST" class="col-4">
                @csrf
                <div class="mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Имя пользователя">
                    @error('name')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                    @error('email')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label">Выберите роль</label>
                    <select name="role" class="form-select" id="role" required="">
                        @foreach($roles as $id => $role)
                            <option value="{{$id}}"
                                {{$id == old('role_id') ? ' selected' : ''}}
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
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>
        </div>
        <!-- /.row (main row) -->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
@endsection
