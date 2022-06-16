<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('device_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('brand_id');

            $table->foreign('brand_id')
                    ->references('id')->on('brands')
                    ->onDelete('cascade');

            $table->timestamps();

        });
    }

   
    public function down()
    {
        Schema::dropIfExists('device_models');
    }
};
