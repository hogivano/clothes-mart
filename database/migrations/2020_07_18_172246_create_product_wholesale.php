<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductWholesale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_wholesale', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->char('title', 100);
            $table->integer('quantity')->default(0);
            $table->boolean('support_voucher')->default(false);
            $table->char('price', 12);
            $table->dateTime('start_date', 0);
            $table->dateTime('expired_date', 0);
            $table->enum('status', ['pending', 'active', 'hold', 'expired']);
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
        Schema::dropIfExists('product_wholesale');
    }
}
