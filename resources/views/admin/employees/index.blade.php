<x-app-layout>
</x-app-layout>

<head>
    @include('admin.admincss')
</head>

<body>

    @include('admin.navbar')
    @include('sweet::alert')


    <!-- BEGIN - Add Employee Modal -->
    <div class="modal fade" id="createEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-xl">Add New Employee</h5>
                    <button type="button" class="btn btn-accent text-xs" data-bs-dismiss="modal">Close</button>
                </div>
                <form method="post" action="{{ url('/portal/employees/new-employee') }}">
                    @method('POST')
                    @csrf
                    <div class="modal-body text-white">
                        <div class="container-fluid flex flex-row justify-content-around mb-2">
                            <div class="flex flex-col">
                                <label class="mb-1" for="firstName">First Name</label>
                                <input name="firstName" type="firstName" placeholder="">
                            </div>
                            <div class="flex flex-col">
                                <label class="mb-1" for="surname">Last Name</label>
                                <input name="surname" type="surname" placeholder="">
                            </div>
                        </div>
                        <div class="container-fluid flex flex-row justify-content-around mb-2">
                            <div class="flex flex-col">
                                <label class="mb-1" for="email">Email Address:</label>
                                <input name="email" type="emailAddress" placeholder="me@example.com">
                            </div>
                            <div class="flex flex-col">
                                <label class="mb-1" for="telephone">Contact Number:</label>
                                <input name="telephone" type="telephone" placeholder="">
                            </div>
                        </div>
                        <div class="container-fluid flex flex-row justify-content-around mb-2">
                            <div class="flex flex-col">
                                <label class="mb-1" for="birth_date">Birth Date:</label>
                                <input class="h-6" name="birthDate" type="date" placeholder="">
                            </div>
                        </div>
                        <div class="container-fluid flex flex-row justify-content-around mb-2">
                            <div class="flex flex-col">
                                <label class="mb-1" for="inputStreet">Street Address:
                                </label>
                                <input type="inputStreetOne" class="mb-2 p-0 w-[181px]" name="inputStreetOne"
                                    placeholder="" rows="2"></input>
                                <input type="inputStreetTwo" class="mb-2 p-0 w-[181px]" name="inputStreetTwo"
                                    placeholder="" rows="2"></input>

                            </div>
                            <div class="flex flex-col justify-content-end pb-2">
                                <label class="mb-1" for="town">Town:</label>
                                <input type="inputTown" class="" name="inputTown" placeholder="">
                            </div>
                        </div>
                        <div class="container-fluid flex flex-row justify-content-around mb-2">

                            <div class="flex flex-col">
                                <label class="mb-1" for="inputCity">City:</label>
                                <input type="inputCity" class="" name="inputCity" placeholder="">
                            </div>
                            <div class="flex flex-col">
                                <label class="mb-1" for="inputPostcode">Postcode:</label>
                                <input type="inputPostcode" class="" name="inputPostcode" placeholder="">
                            </div>
                        </div>
                        <div class="container-fluid flex flex-row justify-content-around mb-2" placeholder="">
                            <div class="flex flex-col">
                                <label class="mb-1" for="inputCounty">County:</label>
                                <input type="inputCounty" class="" name="inputCounty" placeholder="">
                            </div>
                            <div class="flex flex-col">
                                <label class="mb-1" for="country">Country:</label>
                                <input type="inputCountry" class="" name="inputCountry" placeholder="">
                            </div>
                        </div>
                        <div class="flex justify-content-center mt-4">
                            <button class="btn btn-success" id="saveNewEmployeeBtn" type="submit">Submit</button>
                        </div>

                    </div>
            </div>
            </form>
        </div>
    </div>
    <!-- END - Add Employee Modal -->
    <!-- BEGIN - View Employee Modal -->
    <div class="modal fade" id="createEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-xl">Add New Employee</h5>
                    <button type="button" class="btn btn-accent text-xs" data-bs-dismiss="modal">Close</button>
                </div>
                <div class="modal-body text-white">
                    <div class="container-fluid flex flex-row justify-content-around mb-2">
                        <div class="flex flex-col">
                            <label class="mb-1" for="firstName">First Name</label>
                            <input name="firstName" type="firstName" placeholder="">
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-1" for="surname">Last Name</label>
                            <input name="surname" type="surname" placeholder="">
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2">
                        <div class="flex flex-col">
                            <label class="mb-1" for="email">Email Address:</label>
                            <input name="email" type="emailAddress" placeholder="me@example.com">
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-1" for="telephone">Contact Number:</label>
                            <input name="telephone" type="telephone" placeholder="">
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2">
                        <div class="flex flex-col">
                            <label class="mb-1" for="birth_date">Birth Date:</label>
                            <input class="h-6" name="birthDate" type="date" placeholder="">
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2">
                        <div class="flex flex-col">
                            <label class="mb-1" for="inputStreet">Street Address:
                            </label>
                            <input type="inputStreetOne" class="mb-2 p-0 w-[181px]" name="inputStreetOne"
                                placeholder="" rows="2"></input>
                            <input type="inputStreetTwo" class="mb-2 p-0 w-[181px]" name="inputStreetTwo"
                                placeholder="" rows="2"></input>

                        </div>
                        <div class="flex flex-col justify-content-end pb-2">
                            <label class="mb-1" for="town">Town:</label>
                            <input type="inputTown" class="" name="inputTown" placeholder="">
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2">

                        <div class="flex flex-col">
                            <label class="mb-1" for="inputCity">City:</label>
                            <input type="inputCity" class="" name="inputCity" placeholder="">
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-1" for="inputPostcode">Postcode:</label>
                            <input type="inputPostcode" class="" name="inputPostcode" placeholder="">
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2" placeholder="">
                        <div class="flex flex-col">
                            <label class="mb-1" for="inputCounty">County:</label>
                            <input type="inputCounty" class="" name="inputCounty" placeholder="">
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-1" for="country">Country:</label>
                            <input type="inputCountry" class="" name="inputCountry" placeholder="">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- END - Add Employee Modal -->


    <div class="page ml">
        <div class="mx-5 my-5">
            <div
                class="flex flex-row align-items-baseline justify-content-between mb-2 text-lg font-semibold border-b-2 border-accentfade">
                <div class="w-1/4 text-left">
                    Date: {{ \Carbon\Carbon::parse($todaysDate)->format('l, d F Y') }}
                </div>
                <div class="text-5xl text-center">Employees</div>
                <div class="w-1/4 text-right">
                    Time: {{ \Carbon\Carbon::now()->addHour()->format('H:m') }}
                </div>
            </div>
            <div class="dash-card sm:grid-cols-3 lg:grid-cols-6 xl:grid-cols-12 rounded-md shadow border-2">
                <!-- BEGIN - Trigger Modal -->
                <div class="col-span-12 p-2 panel-nav">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button id="newEmployeeButton" data-bs-toggle="modal" data-bs-target="#createEmployeeModal"
                            type="button" class="btn btn-accent">
                            Add
                        </button>
                        <button type="button" class="btn btn-accent-center">
                            Add
                        </button>
                        <button type="button" class="btn btn-accent-right">
                            Add
                        </button>
                    </div>
                </div>
                <!-- END - Trigger Modal -->

                <table id="currentEmployeeTable"
                    class="col-span-12 bg-ui-dark/80 border-4 border-slate-800 rounded-lg shadow text-sm text-white">
                    <thead class="text-dthead border-b-2 bg-slate-800 border-accentfade">
                        <th class="border-b-2 pl-2">
                            <div class="h-4 border-l-3 pb-4 pl-1 w-7 border-accentfade">ID</div>
                        </th>
                        <th class="border-b-2 pl-2">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Name</div>
                        </th>
                        <th class="border-b-2  border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Surname</div>
                        </th>
                        <th class="border-b-2 border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Hours</div>
                        </th>
                        </th>
                        </th>
                        <th class="border-b-2 border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">
                                <x-lucide-info class="w-5 h-5" />
                            </div>
                        </th>
                        <th class="border-b-2 border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">
                                Actions
                            </div>
                        </th>
                    </thead>

                    <tbody class="text-md">
                        @foreach ($employees as $e)
                            <tr class="mx-4">
                                <td class="trow">
                                    {{ $e->employee_id }}
                                </td>
                                <td class="trow">
                                    {{ $e->first_name }}</td>
                                <td class="trow">
                                    {{ $e->surname }}</td>
                                <td class="trow">
                                    {{ $e->contracted_hours }}
                                </td>
                                <td class="trow text-center">
                                    <button type="button" class="" data-toggle="tooltip" data-placement="top"
                                        title="">
                                        <x-lucide-edit class="w-4 h-4 text-info" />
                                    </button>
                                </td>
                                <td class="trow text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-accent dropdown-toggle" type="button" id="triggerId"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Actions
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            <a class="dropdown-item" href="#">Leave a Message</a>
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item disabled" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-span-4 dash-panel-static">
                    <h6>A table of employees that have an active status.</h6>
                </div>
            </div>
        </div>
    </div>
    @include('admin.adminscripts')

    {{-- <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#saveNewEmployeeBtn").click(function(e) {

            e.preventDefault();

            var firstName = $("input[name=firstName]").val();
            var surname = $("input[name=surname]").val();
            var address = $("input[name=address]").val();
            var email = $("input[name=email]").val();
            var telephone = $("input[name=telephone]").val();
            var salary = $("input[name=salary]").val();
            var contractedHours = $("input[name=contractedHours]").val();
            var startDate = $("input[name=startDate]").val();

            $.ajax({
                type: 'POST',
                url: "{{ route('create-employee') }}",
                dataType: 'json',
                data: {
                    firstName: firstName,
                    surname: surname,
                    address: address,
                    email: email,
                    telephone: telephone,
                    salary: salary,
                    contractedHours: contractedHours,
                    startDate: startDate,
                },

                success: function() {

                    swal.fire("Good job!", "You clicked the button!", "success");

                };

            });
            $("#createEmployeeModal").modal('hide');

        });
    </script> --}}
</body>
