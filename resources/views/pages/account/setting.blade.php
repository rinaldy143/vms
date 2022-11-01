@extends('layouts.submaster')

@section('content')
<div class="content">
    <a href="/dashboard" style="z-index: 100">
        <div class="d-flex align-items-center position-absolute subtitle-1 p-2">
            <span style="margin-left: 57.75px"><img src="/assets/media/icons/system-icon/outline/Arrow - left.svg" alt=""></span>
            Back
        </div>
    </a>
    <div class="d-flex position-relative justify-content-center m-0 p-0 heading-3">Account Setting</div>
    <div class="d-flex justify-content-center" style="margin-top: 40px">
        <div class="col-lg-3 col-md-6 col-11 pb-5" style="width: 326px">
            <div class="card drop-shadow border border-secondary align-items-center">
                {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                <div class="pt-10">
                    <a class="download round m-lg-3" href="#" title="" >
                        <img src="img/kebab.png" alt="download" title="download"
                            style="right: 20px;position: absolute;" />
                    </a>
                    <img class="d-flex bd-placeholder-img rounded-circle border justify-content-center" width="80px" height="80px" src="img/Ellipse 44.svg" alt="">
                </div>
                <div class="card-body">
                    <h2 class="card-text text-color-dark font-weight-bold text-3 pb-1 mb-4 px-10 text-truncate">Johny yes papa
                    </h2>
                    <p class="text-center pb-5" style="line-height: 0%"><a href="">Operation</a></p>
                    <p class="text-center m-0"><img src="img/call.png" alt=""> +62897635164518</p>
                    <p class="text-center" style="line-height: 0%; margin-bottom: 48px"><img src="img/Message.png" alt=""> Johnyyespapa@transtrack.id</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <div class="btn btn-outline-danger" style="width: 326px">Change Password</div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="btn btn-danger" style="width: 326px">Logout</div>
    </div>
</div>
@endsection
