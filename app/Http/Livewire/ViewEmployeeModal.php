<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class ViewEmployeeModal extends Component
{
    public $modal = false;


    public function view(Employee $employee_id)
    {
        $this->modal = true;
        dd($employee_id);
    }
    public function render()
    {
        return view('livewire.view-employee-modal');
    }
}
