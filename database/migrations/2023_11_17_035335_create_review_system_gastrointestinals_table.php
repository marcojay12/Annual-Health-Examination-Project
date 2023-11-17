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
        Schema::create('review_system_gastrointestinals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('none');
            $table->string('abdominal_pain');
            $table->string('abdominal_enlargement');
            $table->string('nausea');
            $table->string('vomiting');
            $table->string('diarrhea');
            $table->string('constipation');
            $table->string('polyphagia');
            $table->string('vomiting_blood');
            $table->string('bloody_stool');
            $table->string('melena');
            $table->string('others_gastrointestinal_review');
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
        Schema::dropIfExists('review_system_gastrointestinals');
    }
};
