<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <title>Embroider</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('assets/images/icon/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/cssfile/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/cssfile/create-store.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/cssfile/sidebarPanel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/cssfile/responsiveSidebarPanel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/cssfile/selectLogo.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/cssfile/dashboardForm.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/cssfile/selectProduct.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/cssfile/preview.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/cssfile/congrats.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('assets/cssfile/dashBrd.css') }}" rel="stylesheet" type="text/css" /> --}}

    <script src="{{ asset('assets/js/storeProgress.js') }}"></script>

    {{-- fontawsome --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css"
        integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src={{ asset('assets/js/custom.js') }}></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireScripts
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body>
    <div class="mainBody">
        <div class="bodyInner">
            <div class="sidebarContent">
                @include('layouts.component.sidebarPanel')
            </div>
            <div class="responsiveSidebarContent">
                @include('layouts.component.responsiveSidebarPanel')
            </div>
            <div class="mainContent">
                {{ $slot }}
            </div>

            <div class="dashboardFooter">
                <ul class="footerItem">
                    <li class="footerText">© 2023 Embroidr.io</li>
                    <li class="footerText">Terms</li>
                    <li class="footerText">Privacy</li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
