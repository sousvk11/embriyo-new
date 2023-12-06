<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="sidebar app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->

        <a href="{{ url('/') }}">
            <img alt="Logo" src="{{ asset('assets/images/logo_light.png') }}"
                class="h-25px app-sidebar-logo-default" />
            <img alt="Logo" src="{{ asset('assets/images/icon/logoIconLight.png') }}"
                class="h-40px app-sidebar-logo-minimize" />
        </a>
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-black-left-line fs-3 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <!--begin::Scroll wrapper-->
            <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true">
                <!--begin::Menu-->
                <div class="sidebarBox">
                    <div class="sidebarInnerBox">
                        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                            id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion {{ request()->routeIs('storedashboard') ? 'active' : '' }}">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        @php
                                            $user = App\Models\User::find(Auth::id());
                                            $role = $user->userRole();
                                        @endphp

                                        <!--begin:Menu link-->
                                        <a class= "sidebarMenu menu-link mr-0"
                                            href="{{ route('storedashboard') }}"  >
                                            <span class="sidebarMenuImg"><img src="assets/images/icon/dashboard.svg"
                                                    alt="icon" /></span><span
                                                class="sidebarMenuTitle menu-title">Dashboard</span>
                                        </a>

                                        <!--end:Menu link-->

                                        @if ($role == 1)
                                            <a class= "pt-4 sidebarMenu menu-link {{ request()->routeIs('showStoreAdmins') ? 'active' : '' }}"
                                                href="{{ route('showStoreAdmins') }}">
                                                <span class="sidebarMenuImg"><img src="assets/images/icon/dashboard.png"
                                                        alt="icon" /></span><span
                                                    class="sidebarMenuTitle menu-title">Store
                                                    Admins</span>
                                            </a>
                                        @endif

                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->

                        </div>
                        {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-bank fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Blog</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="../../demo1/dist/pages/blog/home.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Blog Home</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="../../demo1/dist/pages/blog/post.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Blog Post</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div> --}}
                        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                            id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion {{ request()->routeIs('digitized') || request()->routeIs('uploaded-files') ? 'active' : '' }}">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">

                                        <!--begin:Menu link-->
                                        <a class= "sidebarMenu menu-link mr-0"
                                            href="Javascript:void(0)" onclick="toggleClassActive()">
                                            <span class="sidebarMenuImg"><img src="assets/images/icon/menu.svg"
                                                    alt="icon" /></span><span
                                                class="sidebarMenuTitle menu-title">Logo Library</span>
                                            <span class="menu-arrow"></span>
                                        </a>

                                        <!--end:Menu link-->

                                        <div class="menu-sub menu-sub-accordion menu-active-bg customDropdown {{ request()->routeIs('digitized') || request()->routeIs('uploaded-files') ? 'active' : '' }}" id="customDropdown">
                                            <!--begin:Menu item-->
                                            <div class="menu-item sub-item {{ request()->routeIs('digitized') ? 'active' : '' }}">
                                                <!--begin:Menu link-->
                                                <a   class="menu-link" href="{{ route('digitized') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Digitized Logos</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item sub-item {{ request()->routeIs('uploaded-files') ? 'active' : '' }}">
                                                <!--begin:Menu link-->
                                                <a   class="menu-link" href="{{ route('uploaded-files') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Uploaded Files</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->

                        </div>
                        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                            id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion {{ request()->routeIs('store') ? 'active' : '' }}">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">

                                        <!--begin:Menu link-->
                                        <a   class= "sidebarMenu menu-link mr-0"
                                            href="{{ route('store') }}">
                                            <span class="sidebarMenuImg"><img src="assets/images/icon/store.svg"
                                                    alt="icon" /></span><span
                                                class="sidebarMenuTitle menu-title">Stores</span>
                                        </a>

                                        <!--end:Menu link-->

                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->

                        </div>
                        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                            id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion {{ request()->routeIs('storeproducts') ? 'active' : '' }}">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a   class= "sidebarMenu menu-link mr-0"
                                            href="{{ route('storeproducts') }}">
                                            <span class="sidebarMenuImg"><img src="assets/images/icon/cubes.svg"
                                                    alt="icon" /></span><span
                                                class="sidebarMenuTitle menu-title">Products</span>
                                        </a>

                                        <!--end:Menu link-->

                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->

                        </div>
                        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                            id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a   class= "sidebarMenu menu-link mr-0 {{ request()->routeIs('payout') ? 'active' : '' }}"
                                            href="{{ route('payout') }}">
                                            <span class="sidebarMenuImg"><img src="assets/images/icon/atm.svg"
                                                    alt="icon" /></span><span
                                                class="sidebarMenuTitle menu-title">Payout</span>
                                        </a>

                                        <!--end:Menu link-->

                                        @if ($role == 1)
                                            <a class= "pt-4 sidebarMenu menu-link {{ request()->routeIs('showStoreAdmins') ? 'active' : '' }}"
                                                href="{{ route('showStoreAdmins') }}">
                                                <span class="sidebarMenuImg"><img
                                                        src="assets/images/icon/dashboard.png"
                                                        alt="icon" /></span><span
                                                    class="sidebarMenuTitle menu-title">Store
                                                    Admins</span>
                                            </a>
                                        @endif

                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->

                        </div>
                    </div>
                    <div class="sidebarBoxFooter">
                        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                            id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        @php
                                            $user = App\Models\User::find(Auth::id());
                                            $role = $user->userRole();
                                        @endphp

                                        <!--begin:Menu link-->
                                        <a class= "sidebarMenu menu-link mr-0 {{ request()->routeIs('storedashboard') ? 'active' : '' }}"
                                            href="{{ route('storedashboard') }}">
                                            <span class="sidebarMenuImg"><img src="assets/images/icon/settings.svg"
                                                    alt="icon" /></span><span
                                                class="sidebarMenuTitle menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link-->

                                        @if ($role == 1)
                                            <a class= "pt-4 sidebarMenu menu-link {{ request()->routeIs('showStoreAdmins') ? 'active' : '' }}"
                                                href="{{ route('showStoreAdmins') }}">
                                                <span class="sidebarMenuImg"><img
                                                        src="assets/images/icon/dashboard.png"
                                                        alt="icon" /></span><span
                                                    class="sidebarMenuTitle menu-title">Store
                                                    Admins</span>
                                            </a>
                                        @endif

                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->

                        </div>
                        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                            id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        @php
                                            $user = App\Models\User::find(Auth::id());
                                            $role = $user->userRole();
                                        @endphp

                                        <!--begin:Menu link-->
                                        <a class= "sidebarMenu menu-link mr-0 {{ request()->routeIs('storedashboard') ? 'active' : '' }}"
                                            href="{{ route('storedashboard') }}">
                                            <span class="sidebarMenuImg"><img src="assets/images/icon/user.svg"
                                                    alt="icon" /></span><span
                                                class="sidebarMenuTitle menu-title">Users</span>
                                        </a>
                                        <!--end:Menu link-->

                                        @if ($role == 1)
                                            <a class= "pt-4 sidebarMenu menu-link {{ request()->routeIs('showStoreAdmins') ? 'active' : '' }}"
                                                href="{{ route('showStoreAdmins') }}">
                                                <span class="sidebarMenuImg"><img
                                                        src="assets/images/icon/dashboard.png"
                                                        alt="icon" /></span><span
                                                    class="sidebarMenuTitle menu-title">Store
                                                    Admins</span>
                                            </a>
                                        @endif

                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->

                        </div>
                        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6"
                            id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        @php
                                            $user = App\Models\User::find(Auth::id());
                                            $role = $user->userRole();
                                        @endphp

                                        <!--begin:Menu link-->
                                        <a class= "sidebarMenu menu-link mr-0 {{ request()->routeIs('storedashboard') ? 'active' : '' }}"
                                            href="{{ route('storedashboard') }}">
                                            <span class="sidebarMenuImg"><img src="assets/images/icon/account.svg"
                                                    alt="icon" /></span><span
                                                class="sidebarMenuTitle menu-title">Account</span>
                                        </a>
                                        <!--end:Menu link-->

                                        @if ($role == 1)
                                            <a class= "pt-4 sidebarMenu menu-link {{ request()->routeIs('showStoreAdmins') ? 'active' : '' }}"
                                                href="{{ route('showStoreAdmins') }}">
                                                <span class="sidebarMenuImg"><img
                                                        src="assets/images/icon/dashboard.png"
                                                        alt="icon" /></span><span
                                                    class="sidebarMenuTitle menu-title">Store
                                                    Admins</span>
                                            </a>
                                        @endif

                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->

                        </div>
                    </div>

                </div>
                <!--end::Menu-->
            </div>
            <!--end::Scroll wrapper-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <script>
        function toggleClassActive() {
            var dropdown = $('.customDropdown')
            dropdown.toggleClass('active')
        }

        // $(document).ready(function(){
        //     var dropdown = $('.customDropdown')
        //     // console.log(window.location)
        //     if(window.location.href.indexOf("digitized-logo") > -1 || window.location.href.indexOf("uploads") > -1){
        //         dropdown.toggleClass('active')
        //     }

        // });
    </script>
    <!--end::sidebar menu-->
</div>

<!--end::Sidebar-->
