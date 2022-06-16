<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
  
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('device_model_id');
            $table->foreign('device_model_id')
                    ->references('id')->on('device_models')
                    ->onDelete('cascade');

         
            $table->unsignedBigInteger('device_brand_id');
            $table->foreign('device_brand_id')
            ->references('id')->on('brands')
            ->onDelete('cascade');

            $table->unsignedBigInteger('device_warehouse_id');

            $table->foreign('device_warehouse_id')
                    ->references('id')->on('warehouses')
                    ->onDelete('cascade');


            $table->timestamps();

        });
    }

    
    public function down()
    {
        Schema::dropIfExists('devices');
    }
};
