<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_transaction', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('users_address_id');
            $table->unsignedBigInteger('product_transaction_shipping_id')->nullable();
            $table->unsignedBigInteger('voucher_id')->nullable();
            $table->text('payment')->nullable();
            $table->enum('status', ['request', 'on_payment', 'success', 'unsucceess'])->default('request');
            $table->integer('total_quantity');
            $table->char('total_price', 12);
            $table->char('actual_price', 12);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_transaction');
    }
}
