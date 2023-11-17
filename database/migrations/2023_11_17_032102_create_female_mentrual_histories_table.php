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
        Schema::create('female_mentrual_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('duration');
            $table->string('cycle');
            $table->string('flow');
            $table->string('dysmenorrhea');
            $table->string('contraceptive_use');
            $table->string('cervical_cancer');
            $table->string('patient_been_pregnant');
            $table->string('prenatal_checkups');
            $table->string('prenatal_services');
            $table->string('gravida');
            $table->string('year');
            $table->string('place_of_delivery');
            $table->string('type_of_delivery');
            $table->string('specify_complication');
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
        Schema::dropIfExists('female_mentrual_histories');
    }
};
