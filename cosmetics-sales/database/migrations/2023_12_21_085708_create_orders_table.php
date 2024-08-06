<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('total');
            $table->dateTime('order_date');
            $table->string('order_number', 50);
            $table->string('customer_address', 255);
            $table->string('customer_email', 50);
            $table->string('customer_name', 50);
            $table->string('customer_phone', 15); // Changed from ◆ to regular field
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}


