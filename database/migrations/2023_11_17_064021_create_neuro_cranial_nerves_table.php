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
        Schema::create('neuro_cranial_nerves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('identify_test_substance');
            $table->string('visual_acuity');
            $table->string('visual_fields');
            $table->string('brisk_and_reactive');
            $table->string('primary_gaze_midline');
            $table->string('full_eoms');
            $table->string('corneal_blink_reflex');
            $table->string('intact_v1-v3_light_touch_pain_temp');
            $table->string('temporalis_muscle_tone');
            $table->string('no_facial_asymmetry');
            $table->string('intact_gross_hearing');
            $table->string('weber_midline');
            $table->string('rinne_ac_bc_ad_as');
            $table->string('gag_reflex');
            $table->string('uvala_midline');
            $table->string('equal_palatal_rise');
            $table->string('without_difficulty_swallowing');
            $table->string('shrug_scm_and_trapezius');
            $table->string('tongue_midline');
            $table->string('no_fasciculations');
            $table->string('no_atrophy');
            $table->text('with_abnormal_findings');
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
        Schema::dropIfExists('neuro_cranial_nerves');
    }
};
