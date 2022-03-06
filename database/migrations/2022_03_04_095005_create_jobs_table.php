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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string(column:'JobId');
            $table->string(column:'JobTitle');
            $table->text(column: 'Description');
            $table->unsignedBigInteger(column: 'Positions');
            $table->text(column: 'Location');
            $table->unsignedBigInteger(column: 'AnnualSalary');
            $table->unsignedBigInteger(column: 'DeptId');
            $table->string(column: 'EmpId');
            $table->unsignedBigInteger(column: 'Active');
            $table->date(column: 'CreatedDate');
            $table->unsignedBigInteger(column: 'Created_By');
            $table->text(column: 'Remarks');
            $table->unsignedBigInteger(column: 'JobsId');
            $table->date(column: 'CloseDate');
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
        Schema::dropIfExists('jobs');
    }
};
