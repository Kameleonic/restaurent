<x-app-layout>
</x-app-layout>

<head>
    @include('admin.admincss')
</head>

<body>

    @include('admin.navbar')
    @include('admin.employees.partials.update-employee-form')
    @include('admin.employees.partials.edit-salary-modal')
    @include('admin.employees.partials.delete-confirm-modal')

    <div class="page ml">
        <div class="lg:mx-5 lg:my-5">

            @if (session('success'))
                <div class="col-sm-12">
                    <div class="flex alert alert-success alert-dismissible justify-between fade show font-bold"
                        role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <x-lucide-x-square class="h-5 w-5 text-slate-800 rounded" />
                        </button>
                    </div>
                </div>
            @endif

            <div class="flex flex-row dash-card">
                <div class="flex w-20 h-8">
                    <a href="{{ url('portal/employees') }}" class="btn btn-accent">
                        Back
                    </a>
                </div>
                <div class="flex">
                    <div class="grid place-items-center mx-auto">

                        <div class="border-b-2 border-t-2 border-accent rounded-md shadow col-span-6 gap-2 my-3">
                            <div
                                class="action-bar h-auto bg-slate-800 grid-cols-12 rounded-top pb-2 align-items-center">
                                <div class="grid lg:col-span-2 pl-2 border-accentfade">
                                    <x-lucide-user class="h-7 w-7 border border-accent bg-accentfade rounded-circle" />
                                </div>
                                <div class="col-span-8 text-center text-xxxl font-medium">Employee Information</div>
                                <div class="col-span-2 flex justify-content-end text-center">
                                    <div class="mx-1 mt-1 mb-1">
                                        <button class="btn btn-dropdown dropdown-toggle" type="button" id="triggerId"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-start" aria-labelledby="triggerId">
                                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#editEmployeeModal">
                                                <x-lucide-edit class="h-4 mr-2" />
                                                <div>Edit Info</div>
                                            </button>
                                            <a class="dropdown-item disabled" href="#">Disabled action</a>
                                            <h6 class="dropdown-header">Section header</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <div class="dropdown-divider"></div>

                                            <button data-bs-toggle="modal" data-bs-target="#employeeRemoveConfirmModal"
                                                type="button" class="text-danger d-flex dropdown-item">
                                                <x-lucide-trash class="h-4 mr-2" />
                                                <div>Remove Employee</div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:col-span-12 gap-3 my-3">
                                <div class="flex flex-col mx-3 mt-2 shadow-sm">
                                    <div class="card-label-header bg-gray-800/50 px-3 py-2">
                                        Employee Details
                                    </div>
                                    <div class="flex flex-row pl-2 text-white/80 bg-slate-800/20 rounded-b gap-4">
                                        <div class="flex flex-col gap-3 mx-3 my-4 w-1/2">
                                            <div class="d-flex align-items-center">
                                                <x-lucide-user class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">{{ $e->first_name . ' ' . $e->surname }}
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <x-lucide-mail class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">{{ $e->email }}</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <x-lucide-phone class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">{{ $e->tel_no }}</div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-3 mx-3 my-4 w-1/2">
                                            <div class="d-flex align-items-center">
                                                <x-lucide-building
                                                    class="h-9 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">{{ $e->address }}</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <x-lucide-calendar
                                                    class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">{{ $e->birth_date }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col mx-3 mt-2 shadow-sm">
                                    <div class="card-label-header bg-gray-800/50 px-3 py-2">
                                        Employment Details:
                                    </div>
                                    <div
                                        class="flex flex-row pl-2 text-white/80 bg-slate-800/20 rounded-b gap-4  shadow-sm">
                                        <div class="flex flex-col gap-3 mx-3 my-3 w-1/2">
                                            <div class="d-flex align-items-center">
                                                <x-lucide-banknote
                                                    class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">£{{ $e->salary }}/yr</div>
                                            </div>

                                        </div>
                                        <div class="flex flex-col gap-3 mx-3 my-3 w-1/2">

                                            <div class="d-flex align-items-center">
                                                <x-lucide-watch class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">{{ $e->contracted_hours }} hr/s</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    @include('admin.adminscripts')
    @livewireScripts

    <script>
        $(document).ready(function() {
            $('#updateSalaryForm').submit(
                $.ajax({
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: button.data('route'),
                    data: {
                        '_method': 'delete'
                    },
                    success: function(response, textStatus, xhr) {
                        Swal.fire({
                            icon: 'success',
                            title: response,
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: 'Yes'
                        }).then((result) => {
                            window.location = '/posts'
                        });
                    }
                });
            )
        })
    </script>

</body>
