<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('cascade');
            $table->string('sku', 10);
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->float('price', 8, 2)->default(0.00);
            $table->integer('quantity')->default(0);
            $table->boolean('featured')->default(false);
            $table->text('details')->nullable();
            $table->text('description');
            $table->string('color')->nullable();
            $table->integer('bottle_size')->nullable()->unsigned();
            $table->integer('strength')->nullable()->unsigned();
            $table->float('ohm', 8, 3)->nullable();
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
