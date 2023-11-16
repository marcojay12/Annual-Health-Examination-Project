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
        Schema::create('patient_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_category_id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('suffix');
            $table->string('age');
            $table->string('gender');
            $table->string('birthday');
            $table->string('consult_date');
            $table->string('address');
            $table->string('religion');
            $table->string('civil_status');
            $table->string('blood_type');
            $table->string('contact_number');
            $table->string('phic_register');
            $table->string('konsulta_provider');
            $table->string('phic_number');
            $table->string('employment_status');
            $table->string('pwd_number');
            $table->string('pantawid_pamilya');
            $table->string('ip_nonip');
            $table->string('ethnicity');
            $table->foreign('patient_category_id')->references('id')->on('patient_categories')->onDelete('cascade');
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
        Schema::dropIfExists('patient_information');
    }
};
