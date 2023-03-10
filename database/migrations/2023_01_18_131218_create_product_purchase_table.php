<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('product_purchase', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchase_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('qty');
            $table->double('sub_total');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_purchase');
    }
};
