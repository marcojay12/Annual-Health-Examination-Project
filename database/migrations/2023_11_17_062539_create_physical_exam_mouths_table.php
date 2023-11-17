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
        Schema::create('physical_exam_mouths', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('unremarkable');
            $table->string('asymmetry_deformity');
            $table->string('deviation');
            $table->string('erythema');
            $table->string('dentition');
            $table->string('discoloration');
            $table->string('caries_or_cavities');
            $table->string('lesions');
            $table->string('patches');
            $table->string('exudates');
            $table->string('persistent_nodule_ulcer_sores');
            $table->string('enlargement');
            $table->string('masses');
            $table->string('others_physical_exam_mouth');
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
        Schema::dropIfExists('physical_exam_mouths');
    }
};
