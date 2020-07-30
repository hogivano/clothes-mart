<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_data', function (Blueprint $table) {
          $table->bigIncrements('id')->primary();
          $table->char('full_name', 100);
          $table->char('number_phone', 14);
          $table->enum('sex', ['male', 'female']);
          $table->date('birthday')->nullable();
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
        Schema::dropIfExists('profile_data');
    }
}
