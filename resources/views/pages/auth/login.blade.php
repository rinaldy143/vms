@extends('layouts.auth')
<!--begin::Body-->
@section('styles')
<style>

</style>
@endsection
@section('content')
<body id="kt_body" class="content bg_body">

    <!-- Tampilkan notifikasi atau alert jika ada $errorMessage -->
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
    <!--begin::Content-->
        <div class="d-flex mb-20">
            <!--begin::Wrapper-->
                <div class="w-lg-400px ms-custom mt-20 me-custom">
                    <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login.post') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-left">
                                <!--begin::Title-->
                                <div class="w-lg-400px text-dark mb-5">
                                    <div class="heading-1">Login Vehicle Maintenance System</div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Subtitle-->
                                <div class="w-lg-400px" style="font-size: 20px; color: #6E6666;">
                                    Fill form in bellow to access application
                                </div>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="w-lg-400px fv-row mb-10 mt-10">
                                <!--begin::Label-->
                                <label class="subtitle-1" for="email">Email <span style="color: red">*</span></label><br>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="input-icon mt-2">
                                    <span class="icon-inside"><img src="\assets\media\icons\system-icon\outline\Message.svg" alt="envelope"></span>
                                    <input type="email" class="form-control ps-14" name="email" id="email" placeholder="Email">
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="w-lg-400px fv-row mb-10">
                                <!--begin::Label-->
                                <label class="subtitle-1" for="password">Password <span style="color: red">*</span></label><br>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="input-icon mt-2">
                                    <span class="icon-inside"><img src="\assets\media\icons\system-icon\outline\Lock.svg" alt="envelope"></span>
                                    <input type="password" class="form-control ps-14" name="password" id="password-field" placeholder="Password">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            @if(isset($errorMessage))
                            <div class="alert alert-danger" role="alert">
                                {{ $errorMessage }}
                            </div>
                            @endif
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="w-lg-400px text-center">
                                <!--begin::Submit button-->
                                <button type="submit"  class="btn btn-lg btn-danger w-100">
                                    <span class="indicator-label">Login</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="
                                                    spinner-border spinner-border-sm
                                                    align-middle
                                                    ms-2
                                                "></span></span>
                                </button>
                                <!--end::Submit button-->
                                <!--begin::Separator-->
                                <div class="text-center mt-6">
                                    {{-- <a href="/reset" style="color: #0094BC; font-size: 16px">Forgot password?</a> --}}
                                </div>
                                <!--end::Separator-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        {{-- <div class="w-lg-400px align-item-center mt-10">
                            <div class="text-center caption">Powered by</div>
                            <div class="d-flex justify-content-center mt-1">
                                <a href="https://www.transtrack.id/" target="_blank">
                                    <img src="/img/Frame 1622.svg" alt="">
                                </a>
                            </div>
                        </div> --}}
                    <!--end::Form-->
                </div>
                <div class="align-self-center" data-aos="fade-left">
                    <img class="w-543px h-577px" src="/img/Frame 1707478190.svg" alt="">
                </div>
            <!--end::Wrapper-->
        </div>
    <!--end::Content-->
    </div>
    <!--end::Main-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Page Custom Javascript-->
    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <!--end::Javascript-->
</body>
@endsection
<!--end::Body-->
