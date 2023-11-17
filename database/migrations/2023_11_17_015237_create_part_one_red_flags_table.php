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
        Schema::create('part_one_red_flags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('chest_pain');
            $table->string('difficulty_breathing');
            $table->string('seizure_convulsion');
            $table->string('unconscious');
            $table->string('not_oriented');
            $table->string('bluish_discoloration');
            $table->string('harmful_suicide');
            $table->string('acute_fracture');
            $table->string('sign_of_abuse');
            $table->string('severe_abdominal_pain');
            $table->string('persistent_vomiting');
            $table->string('persistent_diarrhea');
            $table->string('tolerate_fluids');
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
        Schema::dropIfExists('part_one_red_flags');
    }
};
