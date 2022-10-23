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
        Schema::create(
            'employees',
            function (Blueprint $table) {
                $table->id('employee_id')->startingValue(1001)->primary();
                $table->tinyInteger('employee_type')->nullable();
                $table->string('role')->nullable();
                $table->string('first_name')->nullable();
                $table->string('surname')->nullable();
                $table->date('birth_date')->nullable();
                $table->text('address')->nullable();
                $table->string('email')->nullable();
                $table->string('tel_no')->nullable();
                $table->integer('salary')->nullable();
                $table->tinyInteger('status')->nullable();
                $table->tinyInteger('contracted_hours')->nullable();
                $table->string('employee_start_date')->nullable();
                $table->tinyInteger('employee_warning')->nullable();
                $table->tinyInteger('holiday_entitlement')->nullable();
                $table->tinyInteger('employment_live')->nullable();
                $table->timestamps();
            }
        );
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
