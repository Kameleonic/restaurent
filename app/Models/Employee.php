<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Carbon\Carbon;

class Employee extends Model
{
    use HasFactory;
    use FormAccessible;

    protected $fillable = [
        'first_name',
        'surname',
        'employee_id',
        'employee_type',
        'address',
        'email',
        'tel_no',
        'salary',
        'contracted_hours',
        'employee_start_date',
        'employee_warning',
        'holiday_entitlement',
        'employment_live',
    ];

    public function getfirstName($first_name)
    {
        return Carbon::parse($first_name)->format('m/d/Y');
    }
}
