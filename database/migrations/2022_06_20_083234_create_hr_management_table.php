<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_management', function (Blueprint $table) {
            $table->bigIncrements('hrmanagement_id');
            $table->string('designation')->nullable();
            $table->string('branch');

            $table->string('name');
            $table->date('dob');
            $table->string('emp_code');

            $table->date('dateofjoining');
            $table->string('email')->nullable();
            $table->string('mobile');
            $table->string('address')->nullable();
            $table->string('fathername')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('adhar_no')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('monthlysalary')->nullable();
            $table->string('image')->nullable();

           

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
        Schema::dropIfExists('hr_management');
    }
};
