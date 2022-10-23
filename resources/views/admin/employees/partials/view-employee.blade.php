<x-app-layout>
</x-app-layout>

<head>
    @include('admin.admincss')
</head>

<body>

    @include('admin.navbar')
    @include('sweet::alert')

    <div class="page ml">
        <div class="mx-5 my-5">
            <div class="dash-card sm:grid-cols-6 lg:grid-cols-9 xl:grid-cols-12 rounded-md shadow border-2">

                <a href="{{ url('portal/employees') }}" class="btn btn-success">
                    Go Back
                </a>

                <div class="col-span-12">
                    <strong>View Employee:</strong> &nbsp;{{ $e->first_name . ', ' . $e->surname }}
                </div>
            </div>
            <div class="dash-card sm:grid-cols-6 lg:grid-cols-9 xl:grid-cols-12 rounded-md shadow border-2">
                <div class="sm:col-span-12 lg:col-span-6 p-2 panel-nav">
                    {{-- <form method="post" action="{{ url('/portal/employees/update', $e->employee_id) }}"> --}}
                    {!! Form::model($e, ['route' => ['update-employee', $e->employee_id]]) !!}
                    @method('POST')
                    @csrf

                    <div class="container-fluid flex flex-row justify-content-around mb-2">

                        <div class="flex flex-col">
                            <label class="mb-1" for="firstName">First Name</label>
                            {!! Form::text('first_name') !!}
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-1" for="surname">Last Name</label>
                            {!! Form::text('surname') !!}
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2">
                        <div class="flex flex-col">
                            <label class="mb-1" for="email">Email Address:</label>
                            {!! Form::email('email') !!}
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-1" for="telephone">Contact Number:</label>
                            {!! Form::text('tel_no') !!}
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2">
                        <div class="flex flex-col">
                            <label class="mb-1" for="birth_date">Birth Date:</label>
                            <input class="h-6" name="birthDate" type="date" value="">
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2">
                        <div class="flex flex-col">
                            <label class="mb-1" for="inputStreet">Street Address:
                            </label>
                            <input type="inputStreetOne" class="mb-2 p-0 w-[181px]" name="inputStreetOne" value=""
                                rows="2"></input>
                            <input type="inputStreetTwo" class="mb-2 p-0 w-[181px]" name="inputStreetTwo" value=""
                                rows="2"></input>

                        </div>
                        <div class="flex flex-col justify-content-end pb-2">
                            <label class="mb-1" for="town">Town:</label>
                            <input type="inputTown" class="" name="inputTown" value="">
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2">

                        <div class="flex flex-col">
                            <label class="mb-1" for="inputCity">City:</label>
                            <input type="inputCity" class="" name="inputCity" value="">
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-1" for="inputPostcode">Postcode:</label>
                            <input type="inputPostcode" class="" name="inputPostcode" value="">
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2" value="">
                        <div class="flex flex-col">
                            <label class="mb-1" for="inputCounty">County:</label>
                            <input type="inputCounty" class="" name="inputCounty" value="">
                        </div>
                        <div class="flex flex-col">
                            <label class="mb-1" for="country">Country:</label>
                            <input type="inputCountry" class="" name="inputCountry" value="">
                        </div>
                    </div>
                    <button type="submit">Save</button>
                    {{-- </form> --}}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

    <!-- END - Add Employee Modal -->
</body>
