<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasingUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchasing_units', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchases_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('amount');
            $table->integer('unit_price');
            $table->integer('total_price');
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
        Schema::dropIfExists('purchasing_units');
    }
}
