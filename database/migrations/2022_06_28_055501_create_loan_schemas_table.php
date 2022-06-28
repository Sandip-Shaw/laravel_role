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
        Schema::create('loan_schemas', function (Blueprint $table) {
            $table->bigIncrements('loanSchema_id');
            $table->string('schema_name');
            $table->string('schema_code');
            $table->string('max_loan_amt');
            $table->string('max_loan_lim')->nullable();
            $table->string('max_tanure');
            $table->string('ann_rate_int');
            $table->string('fore_closure_charge')->nullable();
            $table->string('process_fee')->nullable();
            $table->string('sec_deposit');
            $table->string('active');
            $table->string('int_type');


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
        Schema::dropIfExists('loan_schemas');
    }
};
