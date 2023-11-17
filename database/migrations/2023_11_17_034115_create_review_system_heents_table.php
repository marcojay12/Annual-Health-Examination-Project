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
        Schema::create('review_system_heents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('none');
            $table->string('blurring_of_vision');
            $table->string('floater');
            $table->string('tearing_eye_discharge');
            $table->string('eye_redness');
            $table->string('eye_itchiness');
            $table->string('hearing_changes');
            $table->string('nose_bleed');
            $table->string('nasal_discharge');
            $table->string('ear_discharge');
            $table->string('toothache');
            $table->string('gum_bleeding');
            $table->string('sore_throat');
            $table->string('difficulty_swallowing');
            $table->string('hoarseness');
            $table->string('polydipsia');
            $table->string('others_heent_review');
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
        Schema::dropIfExists('review_system_heents');
    }
};
