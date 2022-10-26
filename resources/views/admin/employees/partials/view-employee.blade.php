<x-app-layout>
</x-app-layout>

<head>
    @include('admin.admincss')
    <style>
        .box {
            color: #fff;
            padding: 20px;
            display: none;
            margin-top: 20px;
        }

        .red {
            background: #ff0000;
        }

        .green {
            background: #228B22;
        }

        .blue {
            background: #0000ff;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#moli").click(function() {
                $("#myModal").modal('show');
            });
        });
    </script>
</head>

<body>

    @include('admin.navbar')
    @include('sweet::alert')

    <div class="page ml">
        <div class="mx-5 my-5">
            <a href="{{ url('portal/employees') }}" class="btn btn-accent">
                Go Back
            </a>

            <div class="d-flex">
                <div class="dash-card sm:grid-cols-6 lg:grid-cols-9 xl:grid-cols-12 rounded-md shadow border-2">
                    <div class="sm:col-span-12 lg:col-span-6 p-2 panel-nav">
                        {{-- <form method="post" action="{{ url('/portal/employees/update', $e->employee_id) }}"> --}}
                        {!! Form::model($e, ['route' => ['update-employee', $e->employee_id]]) !!}
                        @method('POST')
                        @csrf
                        <div class="flex flex-row justify-content-center my-4 p-4">
                            <div class="flex text-center text-accentfade pt-2">
                                ID #
                            </div>
                            <div class="flex text-5xl text-accent">
                                {{ $e->employee_id }}
                            </div>
                        </div>

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
                        <div class="container-fluid flex flex-row mb-2">
                            <div class="flex flex-row mt-2 justify-content-around">
                                <div class="w-1/3">
                                    <div class="flex font-weight-bold mr-1 p-2 rounded-2 bg-slate-800/50">
                                        {{ $e->address }}
                                    </div>
                                </div>
                                <div class="flex flex-col my-2 w-[181px] text-lg">

                                    <label class="mb-1" for="birth_date">Birth Date:</label>
                                    {!! Form::date('birth_date') !!}
                                </div>
                            </div>
                        </div>


                        <div class="container-fluid flex flex-row justify-content-around mb-2">
                            <div class="flex flex-col gap-2 pb-2">
                                <label class="mb-1" for="street">Street Address:
                                </label>
                                {!! Form::text('street_one') !!}
                                {!! Form::text('street_two') !!}

                            </div>
                            <div class="flex flex-col justify-content-end pb-2">
                                <label class="mb-1" for="town">Town:</label>
                                {!! Form::text('town') !!}
                            </div>
                        </div>
                        <div class="container-fluid flex flex-row justify-content-around mb-2">

                            <div class="flex flex-col">
                                <label class="mb-1" for="city">City:</label>
                                {!! Form::text('city') !!}
                            </div>
                            <div class="flex flex-col">
                                <label class="mb-1" for="county">County:</label>
                                {!! Form::text('county') !!}
                            </div>
                        </div>
                        <div class="container-fluid flex flex-row justify-content-around mb-2" value="">
                            <div class="flex flex-col">
                                <label class="mb-1" for="postcode">Postcode:</label>
                                {!! Form::text('postcode') !!}
                            </div>
                            <div class="flex flex-col">
                                <label class="mb-1" for="country">Country:</label>
                                {!! Form::text('country') !!}
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Save</button>
                        {{-- </form> --}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('admin.adminscripts')
    @livewireScripts
</body>
