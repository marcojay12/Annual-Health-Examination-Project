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
        Schema::create('physical_exam_necks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('unremarkable');
            $table->string('regidity');
            $table->string('deviated_trachea');
            $table->string('mass');
            $table->string('nodules');
            $table->string('tenderness');
            $table->string('bruit');
            $table->string('palpable_thyroid');
            $table->string('lymphadenopathies');
            $table->string('others_physical_exam_neck');
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
        Schema::dropIfExists('physical_exam_necks');
    }
};
