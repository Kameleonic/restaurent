<x-app-layout>
</x-app-layout>

<head>
    @include('admin.admincss')
</head>

<body>

    @include('admin.navbar')
    @include('sweet::alert')


    <!-- Modal -->
    <div class="modal fade" id="createEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ url('/portal/employees/new-employee') }}">
                    @method('POST')
                    @csrf
                    <div class="modal-body">
                        <div class="container-fluid">
                            <label for="firstName"></label>
                            <input name="firstName" type="text">
                            <label for="surname"></label>
                            <input name="surname" type="text">
                            <button id="saveNewEmployeeBtn" type="submit">Submit</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>




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


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                    data-bs-target="#createEmployeeModal">
                    Launch
                </button>

                <table id="reservationsTable"
                    class="col-span-12 bg-ui-dark/80 border-4 border-slate-800 rounded-lg shadow text-lg text-white">
                    <div class="sm:col-span-1 lg:col-span-6 xl:col-span-12 text-xl font-semibold">{{ $dataTableTitle }}
                    </div>


                    <thead class=" border-b-2 bg-slate-800 border-accentfade">
                        <th class="border-b-2 font-bold pl-2">
                            <div class="h-4 border-l-3 pb-4 pl-1 w-7 border-accentfade">ID #</div>
                        </th>
                        <th class="border-b-2 font-bold pl-2">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Status</div>
                        </th>
                        <th class="border-b-2  font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Name</div>
                        </th>
                        <th class="border-b-2 font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Contracted Hours</div>
                        </th>
                        <th class="border-b-2 font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Salary</div>
                        </th>
                        <th class="border-b-2 font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Holidays To Use</div>
                        </th>
                        <th class="border-b-2 font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">Actions</div>
                        </th>
                        <th class="border-b-2 font-bold border-accentfade">
                            <div class="h-4 border-l-3 pb-4 pl-1 border-accentfade">
                                Remove
                            </div>
                        </th>
                    </thead>

                    <tbody>

                        <tr class="mx-4">
                            <td class="trow my-1 text-lg p-2">

                            </td>
                            <td class="trow my-1 text-lg p-2"></td>
                            <td class="trow my-1 text-lg "></td>
                            <td class="trow my-1 text-lg">

                            </td>
                            <td class="trow my-1 text-lg">

                            </td>
                            <td class="trow my-1 text-lg">

                            </td>
                            <td class="trow my-1 text-lg">
                                <form action="/portal/reservation/">
                                    @method('GET')
                                    @csrf
                                    <button type="submit">
                                        View Info
                                    </button>
                                </form>
                            </td>
                            <td class="trow my-1 text-lg text-center">
                                <x-lucide-trash class="h-6 w-6 text-red-600" />
                            </td>
                        </tr>
                    </tbody>
                </table>
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
