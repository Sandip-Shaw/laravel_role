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
        Schema::create('member_management', function (Blueprint $table) {
            $table->bigIncrements('member_id');
            $table->string('associate');
            $table->string('group')->nullable();
            $table->string('branch');
            $table->date('emr_date');
            $table->string('title');
            $table->string('gender');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('dob');
            $table->string('qualification')->nullable();
            $table->string('occupation')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('husbandWife_name')->nullable();
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('address');
            $table->string('ward')->nullable();
            $table->string('area')->nullable();
            $table->string('landmark')->nullable();
            $table->string('dist')->nullable();
            $table->string('state');
            $table->string('pincode')->nullable();
            $table->string('country');
            $table->string('p_address')->nullable();
            $table->string('p_dist')->nullable();
            $table->string('p_state')->nullable();
            $table->string('p_pincode')->nullable();
            $table->string('p_country')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('image_photo')->nullable();
            $table->string('image_idproof')->nullable();
            $table->string('image_address')->nullable();
            $table->string('image_pan')->nullable();
            $table->string('image_signature')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('nominee_relation')->nullable();
            $table->string('nominee_mobile')->nullable();
            $table->string('nominee_dob')->nullable();
            $table->string('nominee_adhar')->nullable();
            $table->string('nominee_voter')->nullable();
            $table->string('nominee_pan')->nullable();
            $table->string('nominee_ration')->nullable();
            $table->string('nominee_address')->nullable();
          
          
            $table->string('senior_citizen')->nullable();

            $table->enum('kyc_status', ['Full_KYC','Pending','Failed']);
            $table->enum('status', ['A','I']);

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
        Schema::dropIfExists('member_management');
    }
};
