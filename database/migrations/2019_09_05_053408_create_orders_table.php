<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference');
            $table->bigInteger('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
            $table->integer('status')->default(0);
            $table->string('payment');
            $table->decimal('discounts')->default(0.00);
            $table->decimal('total')->default(0.00);
            $table->decimal('total_paid')->default(0.00);
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
        Schema::dropIfExists('orders');
    }
}
