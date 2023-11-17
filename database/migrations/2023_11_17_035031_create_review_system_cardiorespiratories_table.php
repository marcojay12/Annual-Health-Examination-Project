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
        Schema::create('review_system_cardiorespiratories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('none');
            $table->string('cough');
            $table->string('wheezing');
            $table->string('cough_with_blood');
            $table->string('palpitations');
            $table->string('chest_pain');
            $table->string('difficult_breathing');
            $table->string('others_cardiorespiratories_review');
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
        Schema::dropIfExists('review_system_cardiorespiratories');
    }
};
