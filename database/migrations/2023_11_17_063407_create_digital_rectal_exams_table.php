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
        Schema::create('digital_rectal_exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('unremarkable');
            $table->string('prostate_exam_unremarkable');
            $table->string('sphincter_tone');
            $table->string('strictures');
            $table->string('lesions');
            $table->string('skin_tags');
            $table->string('masses_nodules');
            $table->string('tenderness');
            $table->string('prolapse');
            $table->string('discharge');
            $table->string('blood_per_tactating_finger');
            $table->string('prostate_findings');
            $table->string('others_physical_digital_rectal');
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
        Schema::dropIfExists('digital_rectal_exams');
    }
};
