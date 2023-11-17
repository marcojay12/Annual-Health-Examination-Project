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
        Schema::create('immunization_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('bcg');
            $table->string('hep_b');
            $table->string('rotavirus');
            $table->string('pentavalent_vaccine');
            $table->string('inactive_polio_vaccine');
            $table->string('oral_polio_vaccine');
            $table->string('mmr_vaccine');
            $table->string('pcv');
            $table->string('pcv_thirteen');
            $table->string('inactive_influenza');
            $table->string('hepatitis_a');
            $table->string('varicella');
            $table->string('typhoid');
            $table->string('japanese_encephalitis');
            $table->string('meningococcal');
            $table->string('mr_td');
            $table->string('hpv');
            $table->string('covid');
            $table->string('others_Immunization');
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
        Schema::dropIfExists('immunization_histories');
    }
};
