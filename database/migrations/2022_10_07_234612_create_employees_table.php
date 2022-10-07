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
        Schema::create('tbl_employees', function (Blueprint $table) {
            $table->id('id');
            $table->int('employee_id')->default('NULL');
            $table->string('employee_type')->defualt('0');
            $table->string('first_name');
            $table->string('surname');
            $table->text('address');
            $table->string('email');
            $table->string('tel_no');
            $table->int('salary');
            $table->int('contracted_hours');
            $table->date('date_employed');
            $table->int('employee_warning');
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
        Schema::dropIfExists('tbl_employees');
    }
}
