<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use App\Models\SystemSetting;
use \Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{

    public $nextEmployeeId = 0;

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function employeesIndex()
    {

        $employees = Employee::where('employee_id', '>', 1001)
            ->get();
        // dd($employees);

        $todaysDate = Carbon::now()->toDateString();

        // Set the minimum age to work.
        $minimumAgeToWork = Carbon::now()->subYears(16)->toDateString();

        // dd($minimumAgeToWork);
        $dataTableTitle = 'Current Employees';

        $currentEmployees = Employee::get()
            ->all();

        return view('admin.employees.index', compact('currentEmployees', 'todaysDate', 'dataTableTitle', 'minimumAgeToWork', 'employees'));
    }

    public function createEmployee(Request $r)
    {
        // $nextEmployeeId = '';
        // First we load the next available id value from system_settings
        // $nextEmployeeId = SystemSetting::where('setting_id', 1)
        //     ->pluck('setting_value')
        //     ->str_string();
        // // $nextAvailableEmployeeId = $nextEmployeeId[0];
        // dd($nextEmployeeId);

        // Now we create the employee record
        $data = new Employee();

        $data->employee_type = 1;
        $data->first_name = $r->firstName;
        $data->surname = $r->surname;

        $data->address =
            $r->inputStreetOne
            . ', '
            . $r->inputStreetTwo
            . ', '
            . $r->inputTown
            . ', '
            . $r->inputCity
            . ', '
            . $r->inputPostcode
            . ', '
            . $r->inputCounty
            . ', '
            . $r->inputCountry;

        $data->email = $r->email;
        $data->tel_no = $r->telephone;
        $data->salary = $r->salary;
        $data->contracted_hours = $r->contractedHours;
        $data->employee_start_date = $r->startDate;
        $data->employee_warning = 0;
        $data->holiday_entitlement = 21;

        // dd($data);

        // Remembering to save the data to the database

        // $nextEmployeeId + 1;

        // dd($data);
        $data->save();


        return redirect()->back();
    }
}
