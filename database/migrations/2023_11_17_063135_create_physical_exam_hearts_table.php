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
        Schema::create('physical_exam_hearts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('unremarkable');
            $table->string('precordial_bulge');
            $table->string('dynamic_precordium');
            $table->string('irregular_rhythm');
            $table->string('irregular_rate');
            $table->string('thrills_heaves');
            $table->string('murmurs');
            $table->string('displaced_pmi_apex_beat');
            $table->string('others_physical_exam_heart');
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
        Schema::dropIfExists('physical_exam_hearts');
    }
};
