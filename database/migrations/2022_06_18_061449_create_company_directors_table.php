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
        Schema::create('company_directors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('designation');
            $table->string('member');
            $table->string('director_name');
            $table->string('din_no');
            $table->string('appointment_date');
            $table->string('resignation_date');
            $table->string('image');
            $table->string('authorized_signatory');

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
        Schema::dropIfExists('company_directors');
    }
};
