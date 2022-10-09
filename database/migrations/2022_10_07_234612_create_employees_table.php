<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->default(null);
            $table->tinyInteger('employee_type')->defualt(0);
            $table->string('first_name');
            $table->string('surname');
            $table->text('address');
            $table->string('email');
            $table->string('tel_no');
            $table->integer('salary');
            $table->tinyInteger('contracted_hours');
            $table->string('employee_start_date');
            $table->tinyInteger('employee_warning');
            $table->tinyInteger('holiday_entitlement');
            $table->tinyInteger('employment_live');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
