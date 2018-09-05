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
            $table->increments('pro_id');
            $table->string('product_name');
            $table->integer('id');
            $table->integer('manu_id');
            $table->float('product_price',10,2);
            $table->integer('product_quantity');
            $table->text('product_short_des');
            $table->text('product_long_des');
            $table->text('product_img');
            $table->tinyInteger('pub_status');
            $table->timestamps();
            $table->softDeletes();
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
