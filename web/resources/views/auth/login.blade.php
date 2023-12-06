<x-auth-layout>


    @section('title')
        Login
    @endsection
    <!-- Session Status -->


    <!--begin::Form-->
    <form class="form w-100 logInForm" novalidate="novalidate" action="{{ route('loginPost') }}" method="POST">
        <!--begin::Heading-->
        @csrf
        <div class="text-center mb-8">
            <!--begin::Title-->
            <h1 class="text-dark text-4xl fw-bolder mb-3">Sign In</h1>
            <!--end::Title-->
            {{-- <!--begin::Subtitle-->
        <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
        <!--end::Subtitle=--> --}}
        </div>
        <!--begin::Heading-->


        <!--end::Separator-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="Email" name="email" autocomplete="off"
                class="form-control bg-transparent logInput" />
            @error('email')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <!--end::Email-->
        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::Password-->
            <input type="password" placeholder="Password" name="password" autocomplete="off"
                class="form-control bg-transparent logInput" />
            @error('password')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <!--end::Password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            <!--begin::Link-->
            <a href="{{ route('password.request') }}" class="link-primary forgetLink">Forgot Password ?</a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" class="btn btn-primary signBtn">
                <!--begin::Indicator label-->
                <span class="indicator-label">Sign In</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->

                <!--end::Indicator progress-->
            </button>
        </div>
        <!--end::Submit button-->
        <!--begin::Sign up-->
        @if (Route::has('register'))
            <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
                <a href="{{ route('register') }}" class="link-primary">Sign up</a>
            </div>
        @endif
        <!--end::Sign up-->
    </form>
    <!--end::Form-->
</x-auth-layout>
