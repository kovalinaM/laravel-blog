@extends('personal.layouts.main')
@section('content')
<!--begin::App Content-->
<div class="app-content mt-5">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 1-->
                <div class="small-box text-bg-primary">
                    <div class="inner">
                        <h3>3</h3>
                        <p>Понравившиеся посты</p>
                    </div>
                    <div class="small-box-icon">
                        <i class="nav-icon bi bi-suit-heart-fill"></i>
                    </div>

                    <a
                        href="{{route('personal.liked.index')}}"
                        class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                    >
                        Подробнее <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
                <!--end::Small Box Widget 1-->
            </div>
            <!--end::Col-->
            <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 2-->
                <div class="small-box text-bg-success">
                    <div class="inner">
                        <h3>5</h3>
                        <p>Комментарии</p>
                    </div>
                   <div class="small-box-icon">
                       <i class="nav-icon bi bi-chat-dots"></i>
                   </div>
                    <a
                        href="{{route('personal.comment.index')}}"
                        class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                    >
                        Подробнее <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>
                <!--end::Small Box Widget 2-->
            </div>

            <!--end::Col-->
        </div>
        <!--end::Row-->
    <!--end::Container-->
</div>
<!--end::App Content-->
@endsection
