<!--begin::Aside-->
<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0"
    data-kt-drawer="true"
    data-kt-drawer-name="aside"
    data-kt-drawer-active="{default: true, lg:false}"
    data-kt-drawer-width="{default:'80px', '300px', '100px'}"
    data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo py-8" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="/" class="d-flex align-items-center" style="padding-top: 60px;">
            <img src="/assets/media/logos/VMS Logo.svg" alt="Logo" class="h-55.69px logo me-2">
            <div style="width: 116px" class="subtitle-1">
                Vehicle Management System
            </div>
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <div class="d-flex justify-content-center">
        <hr style="width: 220px; margin-top: 40px">
    </div>
    <div class="w-lg-220px">
        <a href="/account-setting">
            <div class="d-flex justify-content-center">
                @if(auth()->user()->photo == "")
                    <img src="/img/Ellipse 44.png" alt="" style="width: 48px; border-radius: 20px">
                    {{-- <img class="bd-placeholder-img rounded-circle border mt-5"  width="100px" height="100px" src="/img/Ellipse 44.png" alt=""> --}}
                    @else
                    <img src="/img/users/{{auth()->user()->photo}}" alt="" style="width: 48px; border-radius: 20px">
                    @endif
                <div class="d-flex align-items-center mx-1">
                    <div class="mx-2">
                        <div class="row m-0 p-0">
                            <div class="m-0 p-0 figure-caption">{{auth()->user()->role}}</div>
                        </div>
                        <div class="row m-0 p-0">
                            <div class="m-0 p-0 subtitle-1">
                                {{auth()->user()->name}}
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mx-1">
                        <span><img src="/assets/media/icons/system-icon/outline/Arrow - Down.svg" alt=""></span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="d-flex justify-content-center">
        <hr style="width: 220px; margin-top: 20px">
    </div>
    <!--begin::Aside menu-->
    <div class="side-menu flex-column-fluid" id="kt_aside_menu">
        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1 h-350px" id="kt_aside_menu_wrapper"
            data-kt-scroll="true"
            data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
            data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="50px">
            <!--begin::Menu-->
            <div class="menu menu-column">
                <div class="menu-item body-1" style="margin-left: 40px">Navigation</div>
                <div class="menu-item py-3" style="margin-left: 57px">
                    <a class="menu-link" href="/">
                        <span><img src="/assets/media/icons/system-icon/outline/Chart.svg" alt=""></span>
                        <span class="subtitle-1">Dashboard</span>
                    </a>
                </div>
                @can('viewAny', App\Models\Entity\RequestMaintenance::class)
                @if(auth()->user()->role == 'Mechanices')
                <div class="menu-item py-3" style="margin-left: 57px">
                    <a class="menu-link" href="/workorder">
                        <span><img src="/assets/media/icons/system-icon/material-style/codicon_tools.svg" alt=""></span>
                        <span class="subtitle-1">Maintenances</span>
                    </a>
                </div>
                @else
                <div class="menu-item py-3" style="margin-left: 57px">
                    <a class="menu-link" href="/list-maintenance">
                        <span><img src="/assets/media/icons/system-icon/material-style/codicon_tools.svg" alt=""></span>
                        <span class="subtitle-1">Maintenances</span>
                    </a>
                </div>
                @endif
                @endcan
                @can('create', App\Models\Entity\Vehicle::class)
                <div class="menu-item py-3" style="margin-left: 57px">
                    <a class="menu-link" href="/vehicles">
                        <span><img src="/assets/media/icons/system-icon/material-style/2871481021571183084 1.svg" alt=""></span>
                        <span class="subtitle-1">Vehicles</span>
                    </a>
                </div>
                @endcan
                @can('viewAny', App\Models\Entity\Sparepart::class)
                <div class="menu-item py-3" style="margin-left: 57px">
                    <a class="menu-link" href="/spareparts">
                        <span><img src="/assets/media/icons/system-icon/outline/Setting.svg" alt=""></span>
                        <span class="subtitle-1">Spareparts</span>
                    </a>
                </div>
                @endcan
                @can('create', App\Models\Entity\User::class)
                <div class="menu-item py-3" style="margin-left: 57px">
                    <a class="menu-link" href="/users">
                        <span><img src="/assets/media/icons/system-icon/outline/person.svg" alt=""></span>
                        <span class="subtitle-1">Users</span>
                    </a>
                </div>
                @endcan
                <div class="menu-item py-3" style="margin-left: 57px">
                    <a class="menu-link" href="/history">
                        <span><img src="/assets/media/icons/system-icon/outline/Time Circle.svg" alt=""></span>
                        <span class="subtitle-1">History</span>
                    </a>
                </div>
                @can('viewAny', App\Models\Entity\weightproduct::class)
                <div class="menu-item py-3" style="margin-left: 57px">
                    <a class="menu-link" href="/weightproduct">
                        <span><img src="/assets/media/icons/system-icon/outline/Key.svg" alt=""></span>
                        <span class="subtitle-1">Weight Product</span>
                    </a>
                </div>
                @endcan
            </div>
            <!--end::Menu-->
        </div>
        <div class="d-flex justify-content-center">
            <hr style="width: 220px; margin-top: 20px">
        </div>
    </div>
    <!--end::Aside menu-->
</div>
<!--end::Aside-->
