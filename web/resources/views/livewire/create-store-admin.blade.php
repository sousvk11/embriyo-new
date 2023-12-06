<div class="app-main flex-column flex-row-fluid mt-4 pt-4">
    <div class="app-container">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Create Store Admins</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('admindashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Store admins</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <div class="store-table pt-2">
            <form class="form w-100" novalidate="novalidate" wire:submit.prevent="saveUser">
                <!--begin::Input group=-->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="text" placeholder="First Name" wire:model.lazy="first_name" autocomplete="off" class="form-control bg-transparent" />
                        @error('first_name')
                            <small class="text-red-400">{{ $message }}</small>
                        @enderror
                        <!--end::Email-->
                    </div>

                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="text" placeholder="Last Name" wire:model.lazy="last_name" autocomplete="off" class="form-control bg-transparent" />
                        @error('last_name')
                            <small class="text-red-400">{{ $message }}</small>
                        @enderror
                        <!--end::Email-->
                    </div>
                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="email" placeholder="Email" wire:model.lazy="email" autocomplete="off" class="form-control bg-transparent" />
                        @error('email')
                            <small class="text-red-400">{{ $message }}</small>
                        @enderror
                        <!--end::Email-->
                    </div>

                    <div class="fv-row mb-8">
                        <!--begin::Email-->
                        <input type="password" placeholder="Password" wire:model.lazy="password" autocomplete="off" class="form-control bg-transparent" />
                        @error('password')
                            <small class="text-red-400">{{ $message }}</small>
                        @enderror
                        <!--end::Email-->
                    </div>

                    <div class="d-grid mb-10">
                        <button type="submit" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Create Admin</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->

                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Input group=-->
            </form>
        </div>
    </div>
</div>
