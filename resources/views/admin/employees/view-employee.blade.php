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
            <a href="{{ url('portal/employees') }}" class="btn btn-accent lg:ml-20">
                Go Back
            </a>

            <div class="d-flex dash-card sm:flex-col lg:flex-row justify-start mx-auto">
                <div class="rounded-md shadow border-faint border-2">
                    <div class="action-bar bg-slate-800/80 border-accent border-t-2 grid-cols-12 rounded-top">
                        <div class="grid lg:col-span-2 p-2 border-accentfade">

                            <button class="btn btn-dropdown dropdown-toggle -ml-2 -mt-2" type="button" id="triggerId"
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
                        <div class="grid col-span-8 justify-center align-items-center">
                            <div class=" text-xl">
                                <div>ID: {{ $e->employee_id }}</div>
                            </div>
                        </div>

                    </div>
                    <div class="grid lg:col-span-12">
                        <div class="flex flex-col px-3 pt-4">
                            <div class="card-label-header text-white bg-gray-700/80">
                                Employee Information
                            </div>
                            <div class="pl-2 text-ui-dark/70">
                                <div class="d-flex">
                                    <div>First:</div>
                                    <div class="font-light">&nbsp;{{ $e->first_name }}</div>
                                </div>
                                <div class="d-flex">
                                    <div>Surname:</div>
                                    <div class="font-light">&nbsp;{{ $e->surname }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col px-3 pt-2">
                            <div class="card-label-header text-white bg-gray-700/80">
                                Contact Information:
                            </div>
                            <div class="pl-2 text-ui-dark/70">
                                <div class="d-flex align-items-center">
                                    <x-lucide-mail class="h-5 w-5 mr-2" />
                                    <div class="font-light">{{ $e->email }}</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <x-lucide-phone class="h-5 w-5 mr-2 " />
                                    <div class="font-light">{{ $e->tel_no }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col px-3 pt-2">
                            <div class="card-label-header text-white bg-gray-700/80">
                                Current Address:
                            </div>

                            <div class="d-inline-flex text-ui-dark/70 pl-2 align-items-center">
                                <x-lucide-building class="h-12 w-12 mr-2 " />
                                <div class="font-light">{{ $e->address }}</div>
                            </div>

                        </div>
                        <div class="flex flex-col px-3 pt-2">
                            <div class="card-label-header text-white bg-gray-700/80">
                                Employment Info:
                            </div>
                            <div class="pl-2 text-ui-dark/70">
                                <div class="d-flex">
                                    <div>Salary:</div>
                                    <div class="font-light">&nbsp;{{ $e->salary }}</div>
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
