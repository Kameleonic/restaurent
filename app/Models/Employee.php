<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
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
}
