<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('barcode')->nullable();
            $table->integer('category')->nullable();
            $table->string('reference')->nullable();
            $table->string('short_desc')->nullable();
            $table->string('long_desc')->nullable();
            $table->string('image')->default("public/ukn3hknvGHIK9MDH5rGy4EtqtarJpVhJmTcVrJ7s.jpg")->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('margin')->nullable();
            $table->decimal('margin_min')->nullable();
            $table->decimal('price_min')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('itbis')->nullable();
            $table->integer('stock')->nullable();
            $table->string('coment')->nullable();
            $table->string('creator')->nullable();
            $table->integer('status')->nullable();
            $table->date('expiration_date')->nullable();
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
        Schema::dropIfExists('products');
    }
}
