<div class="modal fade" id="employeeRemoveConfirmModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="flex flex-col">
                    <div class="dash-card mt-0">
                        <div>
                            <strong class="text-white-50">Employee Id:</strong>
                            <div>{{ $e->employee_id }}</div>
                        </div>
                        <div>
                            <strong class="text-white-50">Name:</strong>
                            <div>{{ $e->first_name . ' ' . $e->surname }}</div>
                        </div>
                        <div>
                            <strong class="text-white-50">Address:</strong>
                            <div>{{ $e->address }}</div>
                        </div>
                        <div>
                            <strong class="text-white-50">Date of Birth:</strong>
                            <div>{{ $e->birth_date }}</div>
                        </div>
                    </div>
                    <h4 class="text-warning text-center">Are you sure you want to remove this employee?</h4>
                </div>
                <div class="flex justify-content-around">
                    <form id="deleteEmployeeForm"
                        action="{{ url('/portal/employees/delete', ['employee_id' => $e->employee_id]) }}"
                        method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger mx-2 mt-4 d-flex gap-1">
                            <x-lucide-check class="h-4 w-4 text-slate-800" />
                            <div class="text-slate-800 font-bold">Remove</div>
                        </button>
                    </form>
                    <button data-bs-dismiss="modal" class="btn btn-success mx-2 mt-4 d-flex gap-1">
                        <x-lucide-x class="h-4 w-4 text-slate-800" />
                        <div class="text-slate-800 font-bold">Keep</div>
                    </button>
                </div>

            </div>

        </div>
    </div>
</div>
