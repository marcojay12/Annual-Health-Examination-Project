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
        Schema::create('physical_exam_ears', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('unremarkable');
            $table->string('deformity');
            $table->string('discharge');
            $table->string('lesion');
            $table->string('mass');
            $table->string('swelling');
            $table->string('tenderness');
            $table->string('others_pe_ears');
            $table->string('otoscopic_ad');
            $table->string('otoscopic_as');
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
        Schema::dropIfExists('physical_exam_ears');
    }
};
