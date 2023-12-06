<div class="app-main flex-column flex-row-fluid mt-4 pt-4">
    <div class="app-container">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Store Admins</h1>
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
                    <a href="{{ route('createStoreAdmins') }}" class="btn btn-success mt-2 mb-2">Create Store Admin</a>
                    <table class="w-full text-sm text-left rtl:text-right text-slate-50  dark:text-slate-500">
                        <thead class="text-xs text-slate-50 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    First Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Last Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Number Of Stores
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($storeAdmins) > 0)
                                @foreach($storeAdmins as $key => $admin)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td scope="row" class="px-6 py-4">
                                            {{ $admin->first_name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $admin->last_name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $admin->email }}</td>
                                        <td class="px-6 py-4">
                                            <center> 0</center>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button class="btn btn-primary">
                                                Edit
                                            </button>
                                            <button class="btn btn-danger">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>

    </div>

</div>
