<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
          $table->increments('customer_id');
            $table->string('customer_first_name');
            $table->string('customer_last_name');
            $table->string('customer_email')->unique();
            $table->string('customer_pass');
            $table->string('customer_phone')->unique();
            $table->text('customer_address');
            $table->string('customer_city');
            $table->string('customer_country');
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
        Schema::dropIfExists('customers');
    }
}
