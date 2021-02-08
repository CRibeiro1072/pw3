<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('situation_id')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('expert_id')->nullable();
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('template_id')->nullable();
            $table->String('serial');
            $table->string('claimedDefect');
            $table->string('technicalReport')->nullable();
            $table->date('dateTechnicalReport')->nullable();
            $table->timestamps();

            $table->foreign('situation_id')->references('id')->on('situations')->onDelete('CASCADE');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('CASCADE');
            $table->foreign('expert_id')->references('id')->on('experts')->onDelete('CASCADE');
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('CASCADE');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('CASCADE');
            $table->foreign('template_id')->references('id')->on('templates')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
