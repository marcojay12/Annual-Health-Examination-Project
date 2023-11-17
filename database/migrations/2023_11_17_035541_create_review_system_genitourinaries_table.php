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
        Schema::create('review_system_genitourinaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('none');
            $table->string('difficulty_urinating');
            $table->string('polyuria');
            $table->string('nocturia');
            $table->string('increased_urinary_frequency');
            $table->string('bloody_urine');
            $table->string('urinary_incontinence');
            $table->string('decreased_stream');
            $table->string('urinary_stones');
            $table->string('vaginal_penile_discharge');
            $table->string('vaginal_penile_bleeding');
            $table->string('others_genitourinaty_review');
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
        Schema::dropIfExists('review_system_genitourinaries');
    }
};
