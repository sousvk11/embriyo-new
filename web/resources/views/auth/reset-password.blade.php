<x-auth-layout>

    @section('title')
        Reset Password
    @endsection
    <form class="resetFrm" method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="user_id" value="{{ $user->id }}">

        <!-- Email Address -->
        <!-- Email Address -->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <label for="email" class="pb-2 text-lg font-medium">Registered Email</label>
            <input type="text" placeholder="Email" name="email" autocomplete="off"
                class="form-control bg-transparent resetInput" disabled value="{{ $user->email }}" />
            @error('email')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
            <!--end::Email-->
        </div>

        <!-- Password -->
        <div class="fv-row mb-8">
            <label for="email" class="pb-2 text-lg font-medium">Password</label>
            <input type="password" placeholder="Password" name="password" autocomplete="off"
                class="form-control bg-transparent resetInput" />
            @error('password')
                <small class="text-red-400">{{ $message }}</small>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="fv-row mb-8">
            <label for="email" class="pb-2 text-lg font-medium">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" name="password_confirmation" autocomplete="off"
                class="form-control bg-transparent resetInput" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary resetBtn">
                <!--begin::Indicator label-->
                <span class="indicator-label">Set Password</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->

                <!--end::Indicator progress-->
            </button>
        </div>
    </form>
</x-auth-layout>
