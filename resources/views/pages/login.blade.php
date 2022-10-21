@extends('layouts.auth')
<!--begin::Body-->
@section('styles')
<style>
    body{
        padding-top: 88px;
        padding-left: 157px;
        padding-right: 157px;
        padding-bottom: 214px;
    }
</style>
@endsection
@section('content')
<body id="kt_body" class="bg_body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
    <!--begin::Content-->
        <div class="d-flex pb-lg-20">
            <!--begin::Wrapper-->
                <div class="w-lg-400px p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
                            <!--begin::Heading-->
                            <div class="text-left mb-10">
                                <!--begin::Title-->
                                <div class="text-dark mb-3">
                                    <h1>LOGIN Vehicle Management System</h1>
                                </div>
                                <!--end::Title-->
                                <!--begin::Subtitle-->
                                <div class="text-gray-400" style="font-size: 14px">
                                    Fill form in bellow to access application
                                </div>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark" for="email">Email <span style="color: red">*</span></label><br>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="input-icon">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark" for="password">Password <span style="color: red">*</span></label><br>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="input-icon">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-danger w-100 mb-5">
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
                                <div class="text-center mb-5">
                                    <a href="/reset" style="color: #0094BC; font-size: 16px">Forgot password?</a>
                                </div>
                                <!--end::Separator-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <div class="align-item-center p-10">
                            <p class="text-center fw-bold">Powered by</p>
                            <div class="d-flex justify-content-center">
                                <img src="/img/Frame 1622.svg" alt="">
                            </div>
                        </div>
                    <!--end::Form-->
                </div>
                <div class="col-xl-6 col-lg-5 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">
                    <img src="/img/car-maintenance 1.svg" alt="">
                </div>
            <!--end::Wrapper-->
        </div>
    <!--end::Content-->
    </div>
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
    <!--end::Javascript-->
</body>
@endsection
<!--end::Body-->
