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
        Schema::create('family_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('hypertension');
            $table->string('stroke');
            $table->string('heart_disease');
            $table->string('high_cholesterol');
            $table->string('heart_pain');
            $table->string('diabetes');
            $table->string('kidney_disease');
            $table->string('liver_disease');
            $table->string('copd');
            $table->string('asthma');
            $table->string('mental_abuse_condition');
            $table->string('cancer');
            $table->string('others_family_history');
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
        Schema::dropIfExists('family_histories');
    }
};
