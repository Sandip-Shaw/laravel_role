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
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->bigIncrements('loanApplication_id');
            $table->date('application_date');
            $table->string('member');
            $table->string('member_name')->nullable();
            $table->string('branch');
            $table->string('associate')->nullable();
            $table->string('coapplicant_member1')->nullable();
            $table->string('guarantor_member1')->nullable();
            $table->string('coapplicant_member2')->nullable();
            $table->string('guarantor_member2')->nullable();
            $table->string('sec_type')->nullable();
            $table->string('loan_schema');
           
            $table->string('tenure_type');
            $table->string('tenure_months');
            $table->string('emi_collection');
            $table->string('credit_period');
            $table->string('loan_requested');
            $table->enum('status', ['Approved','Disbursed','NotApproved','RequestForApproval']);
            $table->string('amt_approved');
            $table->string('interest_amount');
            $table->string('other_charges');
            $table->string('total_amount_coll');
            $table->string('emi_amount_total');
            $table->string('no_of_emis');
            $table->string('processing_charges');

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
        Schema::dropIfExists('loan_applications');
    }
};
