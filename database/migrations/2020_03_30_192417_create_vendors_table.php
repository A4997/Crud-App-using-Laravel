<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('vendors', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->string('v_name',100);
              $table->string('v_phone',20);
              $table->string('v_address',255);
              $table->integer('city_id');
              $table->string('v_email',50)->nullable();
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
        Schema::dropIfExists('vendors');
    }
}
