@extends('personal.layouts.main')
@section('content')
<!--begin::App Content-->
<div class="app-content mt-5">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-6">
                <div class="card mb-4">
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Текст</th>
                                <th colspan="2" class="text-center">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)
                                <tr class="align-middle">
                                    <td>{{$comment->id}}</td>
                                    <td>{{$comment->message}}</td>
                                    <td class="text-center"><a href="{{route('personal.comment.edit', $comment->id)}}" class="text-success"><i class="bi bi-pencil-square"></i></a></td>
                                    <td class="text-center">
                                        <form action="{{route('personal.comment.delete', $comment->id)}}" method="POST">
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
        <!--end::Row-->
    <!--end::Container-->
</div>
<!--end::App Content-->
@endsection
