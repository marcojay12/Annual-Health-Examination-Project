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
        Schema::create('external_genital_exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('unremarkable');
            $table->string('nits_or_lice');
            $table->string('abnormal_discharge');
            $table->string('abnormal_bleeding');
            $table->string('swelling');
            $table->string('ecchymosis');
            $table->string('excoriation');
            $table->string('rashes');
            $table->string('lesions');
            $table->string('nodules');
            $table->string('mass');
            $table->string('others_physical_external_genital_exam');
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
        Schema::dropIfExists('external_genital_exams');
    }
};
