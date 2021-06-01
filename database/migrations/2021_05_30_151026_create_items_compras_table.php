<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compra_id')->nullable();
            $table->foreign('compra_id')->references('id')->on('compras')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('producto_id')->nullable();
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cantidad');
            $table->integer('precioUnidad');
            $table->integer('precioTotal');
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
        Schema::dropIfExists('items_compras');
    }
}
