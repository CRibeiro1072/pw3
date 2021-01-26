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
            $table->string('status');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('gadget_id');
            $table->unsignedBigInteger('expert_id');
            $table->string('claimedDefect');
            $table->string('technicalReport')->nullable();
            $table->date('dateTechnicalReport')->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('CASCADE');
            $table->foreign('gadget_id')->references('id')->on('gadgets')->onDelete('CASCADE');
            $table->foreign('expert_id')->references('id')->on('experts')->onDelete('CASCADE');
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
