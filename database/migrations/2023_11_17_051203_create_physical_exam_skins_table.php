<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_exam_skins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('unremarkable');
            $table->string('cyanosis');
            $table->string('pallor');
            $table->string('jaundice');
            $table->string('dry');
            $table->string('cold');
            $table->string('wound');
            $table->string('rash');
            $table->string('petechiae');
            $table->string('ecchymosis');
            $table->string('acne');
            $table->string('mass');
            $table->string('suspecious_growth');
            $table->string('othes_pe_skin');
            $table->foreign('patient_information_id')->references('id')->on('patient_information')->onDelete('cascade');
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
        Schema::dropIfExists('physical_exam_skins');
    }
};
