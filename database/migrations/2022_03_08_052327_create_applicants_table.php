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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string(column:'Job_Id');
            $table->string(column:'Applicant_Id');
            $table->string(column: 'First_Name');
            $table->string(column: 'Last_Name');
            $table->string(column: 'City');
            $table->string(column: 'State');
            $table->string(column: 'Profile_url')->nullable();
            $table->string(column: 'Notice_Period');
            $table->date(column: 'DOB');
            $table->string('Email')->unique();
            $table->unsignedBigInteger('Mobile')->unique();
            $table->string(column: 'Gender');
            $table->string(column: 'Address1');
            $table->string(column: 'Address2');
            $table->unsignedBigInteger(column: 'Pincode');
            $table->string(column: 'Rating');
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
        Schema::dropIfExists('applicants');
    }
};
