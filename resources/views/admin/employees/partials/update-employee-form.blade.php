<!--  Modal trigger button  -->

<!-- Modal Body-->
<div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex" id="modalTitleId">
                    <x-lucide-edit class="h-5 mr-2" /> {{ $e->first_name . ' ' . $e->surname }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="d-flex">Use this form to update employee details, each of the items can be updated seperatly.
                </h5>
                <div class="dash-card rounded-lg border-accentfade p-5 shadow">
                    {{-- <form method="post" action="{{ url('/portal/employees/update', $e->employee_id) }}"> --}}
                    {!! Form::model($e, ['route' => ['update-employee', $e->employee_id]]) !!}
                    @method('POST')
                    @csrf

                    <div class="container-fluid flex flex-row justify-content-around mb-2 gap-4">

                        <div class="flex flex-col flex-1">
                            <label class="mb-1" for="firstName">First Name</label>
                            {!! Form::text('first_name') !!}
                        </div>
                        <div class="flex flex-col flex-1">
                            <label class="mb-1" for="surname">Last Name</label>
                            {!! Form::text('surname') !!}
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2 gap-4">
                        <div class="flex flex-col flex-1">
                            <label class="mb-1" for="email">Email Address:</label>
                            {!! Form::email('email', 'me@someone.com') !!}
                        </div>
                        <div class="flex flex-col flex-1">
                            <label class="mb-1" for="telephone">Contact Number:</label>
                            {!! Form::text('tel_no') !!}
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row mb-2 gap-4">
                        <div class="flex flex-row mt-2 justify-content-around">

                            <div class="flex flex-col flex-1 my-2 w-[150px] text-lg">

                                <label class="mb-1" for="birth_date">Birth Date:</label>
                                {!! Form::date('birth_date', 'dd-mm-yyyy') !!}
                            </div>
                        </div>
                    </div>


                    <div class="container-fluid flex flex-row gap-4 justify-content-around mb-2">
                        <div class="flex flex-col flex-1 gap-2 pb-2">
                            <label class="mb-1" for="street">Street Address:
                            </label>
                            {!! Form::text('street_one') !!}
                            {!! Form::text('street_two') !!}

                        </div>
                        <div class="flex flex-col flex-1 justify-content-end pb-2">
                            <label class="mb-1" for="town">Town:</label>
                            {!! Form::text('town') !!}
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2 gap-4">

                        <div class="flex flex-col flex-1">
                            <label class="mb-1" for="city">City:</label>
                            {!! Form::text('city') !!}
                        </div>
                        <div class="flex flex-col flex-1">
                            <label class="mb-1" for="county">County:</label>
                            {!! Form::text('county') !!}
                        </div>
                    </div>
                    <div class="container-fluid flex flex-row justify-content-around mb-2 gap-4" value="">
                        <div class="flex flex-col flex-1">
                            <label class="mb-1" for="postcode">Postcode:</label>
                            {!! Form::text('postcode') !!}
                        </div>
                        <div class="flex flex-col flex-1">
                            <label class="mb-1" for="country">Country:</label>
                            {!! Form::text('country') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
