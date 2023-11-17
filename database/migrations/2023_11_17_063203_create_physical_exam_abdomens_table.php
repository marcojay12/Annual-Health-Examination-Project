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
        Schema::create('physical_exam_abdomens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('unremarkable');
            $table->string('scars');
            $table->string('discoloration');
            $table->string('striae');
            $table->string('mass');
            $table->string('distended');
            $table->string('visible_peristalsis_pulsation');
            $table->string('fluid_wave');
            $table->string('shifting_dullness');
            $table->string('hypo_hyperactive_bowel_sound');
            $table->string('tenderness_guarding');
            $table->string('palpable_liver_edge');
            $table->string('palpable_spleen');
            $table->string('others_physical_exam_abdomen');
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
        Schema::dropIfExists('physical_exam_abdomens');
    }
};
