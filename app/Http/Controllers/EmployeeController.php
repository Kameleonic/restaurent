<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use App\Models\SystemSetting;
use \Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\Input;

class EmployeeController extends Controller
{
    public $primarykey = 'employee_id';

    public $nextEmployeeId = 0;

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function employeesIndex()
    {

        $employees = Employee::where('employee_id', '>=', 1001)
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
        $data->birth_date = $r->birthDate;
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


        return redirect()->back()->with('success', 'Employee successfully created');
    }

    public function updateEmployee(Request $r, $employee_id)
    {

        // Load the employee record.
        $data = Employee::where('employee_id', $employee_id)
            ->get();
        // dd($r);

        // Update each value dependant on if statement to minimize querys.
        if ($r->first_name !== $data[0]->first_name) {
            Employee::query()
                ->where('employee_id', $employee_id)
                ->update(['first_name' => $r->first_name]);
        }
        if ($r->surname !== $data[0]->surname) {
            Employee::query()
                ->where('employee_id', $employee_id)
                ->update(['surname' => $r->surname]);
        }
        if ($r->email !== $data[0]->email) {
            Employee::query()
                ->where('employee_id', $employee_id)
                ->update(['email' => $r->email]);
        }
        if ($r->tel_no !== $data[0]->tel_no) {
            Employee::query()
                ->where('employee_id', $employee_id)
                ->update(['tel_no' => $r->tel_no]);
        }
        if ($r->birth_date !== $data[0]->birth_date) {
            Employee::query()
                ->where('employee_id', $employee_id)
                ->update(['birth_date' => $r->birth_date]);
        }

        // We define the address into one variable.

        $newAddress =
            $r->street_one . ' '
            .$r->street_two . ', '
            .$r->town . ', '
            .$r->city . ', '
            .$r->county . ', '
            .$r->postcode . ', '
            .$r->country;
        // dd($newAddress);


        // Now we update the address.
        if ($newAddress !== $data[0]->address) {
            Employee::query()
                ->where('employee_id', $employee_id)
                ->update(['address' => $newAddress]);
        }

        return redirect()->back()->with('success', 'Employee successfully created');
    }

    public function viewEmployee($employee_id,)
    {
        $e = Employee::select()
            ->where('employee_id', '=', $employee_id)
            ->first();
        // dd($e);
        return view('admin.employees.partials.view-employee', compact('e'));
    }

    public function employeesDelete($employee_id)
    {


        $data = Employee::where('employee_id', $employee_id)->delete();

        if ($data == null) {
            return redirect()->back()->with('error', 'Employee could not be found.');
        } else {
            return redirect()->back()->with('success', 'Employee successfully removed.');
        }
    }
}
