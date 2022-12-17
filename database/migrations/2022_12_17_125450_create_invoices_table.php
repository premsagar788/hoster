<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uoid');
            $table->string('product');
            $table->unsignedBigInteger('quantity');
            $table->string('price');
            $table->string('payment_method');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id');
            $table->enum('status', ['Pending', 'Cancelled', 'Paid'])->default('Pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
