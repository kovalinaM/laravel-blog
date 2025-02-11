@extends('personal.layouts.main')
@section('content')
<!--begin::App Content-->
<div class="app-content mt-5">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <form action="{{route('personal.comment.update', $comment->id)}}" method="POST" class="w-50">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <textarea name="message" type="text" class="form-control" col="10">{{$comment->message}}</textarea>
                    @error('message')
                    <div class="text-danger">
                        Это поле не должно быть пустым!
                    </div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
@endsection
