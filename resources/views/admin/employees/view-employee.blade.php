<x-app-layout>
</x-app-layout>

<head>
    @include('admin.admincss')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

            <div class="flex flex-row dash-card bg-transparent">
                <div class="flex w-20 h-8">
                    <a href="{{ url('portal/employees') }}" class="btn btn-accent">
                        Back
                    </a>
                </div>
                <div class="flex">
                    <div class="grid place-items-center mx-auto">
                        <div
                            class="border-b-2 border-t-2 border-accent rounded-lg bg-dark shadow-md col-span-6 gap-2 my-3">
                            <div
                                class="action-bar h-auto bg-slate-800 grid-cols-12 rounded-top pb-2 align-items-center">
                                <div class="grid lg:col-span-2 pl-1 border-accentfade">
                                    <div class="d-flex gap-2 align-items-center">
                                        <x-lucide-user
                                            class="h-8 w-8 border border-accent bg-accentfade rounded-circle" />
                                    </div>

                                </div>

                                <div class="col-span-8 text-center text-accent text-xxxl font-medium">Employee
                                    Information</div>

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

                                            <button id="deleteEmployeeButton" type="button"
                                                data-bs-id="{{ $e->employee_id }}"
                                                class="text-danger d-flex dropdown-item gap-2">
                                                <x-lucide-trash class="h-4 w-4 text-danger" />
                                                <div class="text-danger font-bold">Remove Employee</div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:col-span-12 gap-3 my-3">

                                <div class="flex flex-col mx-3 mt-1 shadow-sm">

                                    <div class="card-label-header bg-gray-800/80 px-3 py-2">
                                        Employee Details
                                    </div>
                                    <div class="flex flex-row pl-2 text-white/80 bg-slate-800/20 rounded-b gap-4">
                                        <div class="flex flex-col gap-3 mx-3 my-4 w-1/2">
                                            <div class="d-flex align-items-center">
                                                <x-lucide-user class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light d-flex gap-2 align-items-center">
                                                    {{ $e->first_name . ' ' . $e->surname }}
                                                    <div class="text-sm">
                                                        @if ($e->status == 1)
                                                            <div title="Inactive" class="mx-auto text-red-500">
                                                                <div class="d-flex align-items-center gap-1">
                                                                    <x-lucide-circle-dot
                                                                        class="mx-auto w-3 h-3 hover:animate-ping" />
                                                                </div>
                                                            </div>
                                                        @elseif ($e->status == 2)
                                                            <div title="Active" class="mx-auto text-green-500">
                                                                <div class="d-flex align-items-center gap-1">
                                                                    <x-lucide-circle-dot
                                                                        class="mx-auto w-3 h-3 hover:animate-ping" />
                                                                </div>

                                                            </div>
                                                        @elseif ($e->status == 3)
                                                            <div title="Away" class="mx-auto text-amber-500">
                                                                <div class="d-flex align-items-center gap-1">
                                                                    <x-lucide-circle-dot
                                                                        class="mx-auto w-3 h-3 hover:animate-ping" />

                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <x-lucide-mail
                                                    class="text-accentfade h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">{{ $e->email }}</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <x-lucide-phone
                                                    class="text-accentfade h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">{{ $e->tel_no }}</div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-3 mx-3 my-4 w-1/2">
                                            <div class="d-flex align-items-center">
                                                <x-lucide-building
                                                    class="text-accentfade h-9 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">{{ $e->address }}</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <x-lucide-calendar
                                                    class="text-accentfade h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">{{ $e->birth_date }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col mx-3 mt-2 shadow-sm">
                                    <div class="card-label-header bg-gray-800/50 px-3 py-2">
                                        Employment Details:
                                    </div>
                                    <div class="flex flex-row pl-2 text-white/80 bg-slate-800/20 rounded-b gap-4">
                                        <div class="flex flex-col gap-3 mx-3 my-3 w-1/2">
                                            <div class="d-flex align-items-center">
                                                @if ($e->employee_type == 1)
                                                    <x-lucide-unlock
                                                        class="h-6 pr-1 mr-2 border-r-3 text-success border-slate-800/50" />
                                                    <button type="button" id="tooltipButton{{ $e->employee_id }}"
                                                        class="font-bold text-success underline">
                                                        Domain Admin

                                                    </button>
                                                @else
                                                    <x-lucide-lock
                                                        class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                    <button type="button" id="tooltipButton{{ $e->employee_id }}"
                                                        class="font-bold text-success underline">
                                                        <strong>
                                                            Employee
                                                        </strong>
                                                    </button>
                                                @endif
                                                {{-- <div id="tooltip" role="tooltip">
                                                    <div id="arrow" data-popper-arrow></div>
                                                    <div class="flex flex-col p-2">
                                                        <div class="table-responsive">
                                                            <table class="table table-primary">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Column 1</th>
                                                                        <th scope="col">Column 2</th>
                                                                        <th scope="col">Column 3</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="">
                                                                        <td scope="row">R1C1</td>
                                                                        <td>R1C2</td>
                                                                        <td>R1C3</td>
                                                                    </tr>
                                                                    <tr class="">
                                                                        <td scope="row">Item</td>
                                                                        <td>Item</td>
                                                                        <td>Item</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>

                                                    My tooltip
                                                </div> --}}

                                            </div>
                                            <div class="d-flex align-items-center">
                                                <x-lucide-banknote
                                                    class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">Your annual salary is
                                                    <span class="font-bold text-white">£{{ $e->salary }}</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <x-lucide-calendar-days
                                                    class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">
                                                    <button type="button" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" id="employeeStartDateTooltipBtn"
                                                        alt="">
                                                        Your employment start date
                                                        was
                                                        <span class="font-bold text-white">
                                                            {{ \Carbon\Carbon::parse($e->employee_start_date)->diffForHumans() }}
                                                        </span>
                                                    </button>
                                                </div>
                                                <div id="tooltip" role="tooltip">
                                                    <div id="arrow"></div>
                                                    <div class="flex flex-col font-bold ">
                                                        Date:
                                                        {{ \Carbon\Carbon::parse($e->employee_start_date)->format('d, M Y') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-3 mx-3 my-3 w-1/2">

                                            <div class="d-flex align-items-center">
                                                <x-lucide-watch class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">Contracted to
                                                    <span
                                                        class="font-bold text-white">{{ $e->contracted_hours }}</span>
                                                    hr/s
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <x-lucide-plane class="h-6 pr-1 mr-2 border-r-3 border-slate-800/50" />
                                                <div class="font-light">You have
                                                    <span class="font-bold text-white">{{ $e->holiday_entitlement }}
                                                    </span> days
                                                    remaining.
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
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#deleteEmployeeButton").submit(function(event) {
                var id = $(this).data("employee_id");
                var token = $("meta[name='csrf-token']").attr("content");

                event.preventDefault();
                Swal.fire({
                    icon: danger,
                    title: 'Remove Employee',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Confirm'
                });
            });
            $('#deleteEmployee').on('submit'function() {

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
                            icon: success,
                            title: response,
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: 'Yes'
                        });
                    }
                });
            })
        })
    </script>
    <script>
        const button = document.querySelector('#employeeStartDateTooltipBtn');
        const tooltip = document.querySelector('#tooltip');
        const popperInstance = Popper.createPopper(button, tooltip, {
            modifiers: [{
                name: 'offset',
                options: {
                    offset: [110, 0],
                },
            }, ],
        });

        function show() {
            // Make the tooltip visible
            tooltip.setAttribute('data-show', '');
            // Enable the event listeners
            popperInstance.setOptions((options) => ({
                ...options,
                modifiers: [
                    ...options.modifiers,
                    {
                        name: 'eventListeners',
                        enabled: true
                    },
                ],
            }));
            // Update its position
            popperInstance.update();
        }

        function hide() {
            // Hide the tooltip
            setTimeout(200);
            tooltip.removeAttribute('data-show');
            // Disable the event listeners
            popperInstance.setOptions((options) => ({
                ...options,
                modifiers: [
                    ...options.modifiers,
                    {
                        name: 'eventListeners',
                        enabled: false
                    },
                ],
            }));
        }
        const showEvents = ['mouseenter', 'focus'];
        const hideEvents = ['mouseleave', 'blur'];
        showEvents.forEach((event) => {
            button.addEventListener(event, show);
        });
        hideEvents.forEach((event) => {

            button.addEventListener(event, hide);
        });
    </script>

    {{-- <script>
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
    </script> --}}

</body>
