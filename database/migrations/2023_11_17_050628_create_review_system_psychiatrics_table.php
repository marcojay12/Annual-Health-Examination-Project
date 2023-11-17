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
        Schema::create('review_system_psychiatrics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('none');
            $table->string('problem_in_concentration');
            $table->string('peers_of_carryingout');
            $table->string('easily_distracted');
            $table->string('excessive_overactivity');
            $table->string('extreme_changes');
            $table->string('extreme_mood_changes');
            $table->string('excessive_fears');
            $table->string('difficulty_in_social_interact');
            $table->string('sleep_difficulties');
            $table->string('hallucinations');
            $table->string('disruptive');
            $table->string('impulsivity');
            $table->string('severe_tantrums');
            $table->string('physical_aggression');
            $table->string('suicidal_thoughts');
            $table->string('others_psychiatric_review');
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
        Schema::dropIfExists('review_system_psychiatrics');
    }
};
