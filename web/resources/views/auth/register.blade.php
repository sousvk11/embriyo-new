<x-auth-layout>
    @section('title')
        Sign Up
    @endsection
    <form class="regForm" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="First Name" name="first_name" autocomplete="off"
                class="form-control bg-transparent regInput" />
            @error('first_name')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <!--end::Email-->
        </div>

        <!-- Last Name -->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="Last Name" name="last_name" autocomplete="off"
                class="form-control bg-transparent regInput" />
            @error('last_name')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <!--end::Email-->
        </div>
        <!-- Email Address -->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="Email" name="email" autocomplete="off"
                class="form-control bg-transparent regInput" />
            @error('email')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <!--end::Email-->
        </div>

        <!-- Password -->
        <div class="fv-row mb-8">
            <!--begin::Password-->
            <input type="password" placeholder="Password" name="password" autocomplete="off"
                class="form-control bg-transparent regInput" />
            @error('password')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <!--end::Password-->
        </div>

        <!-- Role -->
        <div class="fv-row mb-8">
            <!--begin::Password-->
            <select name="role" class="form-control bg-transparent regInput">
                <option value="0">Select Role</option>
                @if (count($roles) > 0)
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                @endif
            </select>
            @error('role')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <!--end::Password-->
        </div>

        <div class="flex justify-between items-between items-center mt-4">
            <div>{{ __('Already registered?') }}
                <a class="link-primary underline text-base rounded-md " href="{{ route('login') }}">
                    {{ __('Sign In') }}

                </a>
            </div>


            <div class="d-grid">
                <button type="submit" class="btn btn-primary regBtn">
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Register</span>
                    <!--end::Indicator label-->
                    <!--begin::Indicator progress-->

                    <!--end::Indicator progress-->
                </button>
            </div>
        </div>
    </form>
</x-auth-layout>
