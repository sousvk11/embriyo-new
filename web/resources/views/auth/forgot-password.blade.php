<x-auth-layout>

    @section('title')
        Forgot Password
    @endsection
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your registered email address and we will help you reset your password') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="forgetPass" method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent passInput" />
            @error('email')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <!--end::Email-->
        </div>

        <!--begin::Submit button-->
    <div class="d-grid">
        <button type="submit" class="btn btn-primary forgetPassBtn">
            <!--begin::Indicator label-->
            <span class="indicator-label">Reset Password</span>
            <!--end::Indicator label-->
            <!--begin::Indicator progress-->

            <!--end::Indicator progress-->
        </button>
    </div>
    <!--end::Submit button-->
    </form>
</x-auth-layout>
