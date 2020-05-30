<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccassionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occassion_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('occassion_id');
            $table->string('name_ar');
            $table->string('name_en');
            $table->float('price',8,2);
            $table->string('image');
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
        Schema::dropIfExists('occasion_products');
    }
}
