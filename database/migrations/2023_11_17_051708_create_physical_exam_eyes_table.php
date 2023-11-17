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
        Schema::create('physical_exam_eyes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('unremarkable');
            $table->string('icteric_sclera');
            $table->string('red_eye');
            $table->string('white_pupillary');
            $table->string('ror');
            $table->string('exophthalmos');
            $table->string('strabismus');
            $table->string('discharge');
            $table->string('xanthelasma');
            $table->string('xanthoma');
            $table->string('chalazion');
            $table->string('sty');
            $table->string('ectropion');
            $table->string('ptosis');
            $table->string('others_pe_eyes');
            $table->string('visual_od');
            $table->string('visual_os');
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
        Schema::dropIfExists('physical_exam_eyes');
    }
};
