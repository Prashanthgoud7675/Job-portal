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
        Schema::create('listings', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger(column:'user_id');
            $table->string(column: 'title');
            $table->string(column: 'slug');
            $table->string(column: 'company');
            $table->string(column: 'location');
            $table->string(column: 'logo')->nullable();
            $table->boolean(column: 'is_highlighted')->default(value:false);
            $table->boolean(column: 'is_active')->default(value:true);
            $table->string(column: 'content');
            $table->string(column: 'apply_link');
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
        Schema::dropIfExists('listings');
    }
};
