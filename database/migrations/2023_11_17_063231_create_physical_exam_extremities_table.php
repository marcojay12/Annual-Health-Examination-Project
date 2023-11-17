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
        Schema::create('physical_exam_extremities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('unremarkable');
            $table->string('varicosities');
            $table->string('skin_changes');
            $table->string('discoloration');
            $table->string('redness');
            $table->string('bruising');
            $table->string('deforming');
            $table->string('clubbing');
            $table->string('mass');
            $table->string('edema');
            $table->string('swelling');
            $table->string('tenderness');
            $table->string('lesion');
            $table->string('ulcer');
            $table->string('unequal_pulses');
            $table->string('CRT_2sec');
            $table->string('fracture_sprain');
            $table->string('others_physical_exam_extremities');
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
        Schema::dropIfExists('physical_exam_extremities');
    }
};
