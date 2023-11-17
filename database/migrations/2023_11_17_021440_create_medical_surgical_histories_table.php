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
        Schema::create('medical_surgical_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('asthma');
            $table->string('allergies');
            $table->string('allergies_to_medicines');
            $table->string('hearing_problem');
            $table->string('vision_problem');
            $table->string('heart_disease');
            $table->string('mental_conditions');
            $table->string('cancer');
            $table->string('other_organ_disorder');
            $table->string('previous_hospitalization');
            $table->string('previous_surgeries');
            $table->string('others_medical_history');
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
        Schema::dropIfExists('medical_surgical_histories');
    }
};
