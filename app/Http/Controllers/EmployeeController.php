<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use \Carbon\Carbon;


class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function employeesIndex()
    {
        $todaysDate = Carbon::now()->toDateString();
        $dataTableTitle = 'Current Employees';

        $currentEmployees = Employee::get()
            ->all();

        return view('admin.employees.index', compact('currentEmployees', 'todaysDate', 'dataTableTitle'));
    }

    public function createEmployee(Request $r)
    {

        $data = new Employee();

        $data->employee_type = 0;
        $data->first_name = $r->firstName;
        $data->surname = $r->surname;
        $data->address = $r->address;
        $data->email = $r->email;
        $data->tel_no = $r->telephone;
        $data->salary = $r->salary;
        $data->contracted_hours = $r->contractedHours;
        $data->employee_start_date = $r->startDate;
        $data->employee_warning = 0;
        $data->holiday_entitlement = 21;

        $data->save();

        alert('success', 'Sweet Alert with success.', 'Welcome to ItSolutionStuff.com')->autoclose(3500);

        return redirect()->back();
    }
}
