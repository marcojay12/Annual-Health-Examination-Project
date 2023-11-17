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
        Schema::create('neuro_mental_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_information_id');
            $table->string('awake_alert_with_regard');
            $table->string('goal_directed_response');
            $table->string('oriented_to_time_person_place');
            $table->string('follow_commands');
            $table->string('spontaneous_eye_opening');
            $table->string('concentration_fund');
            $table->string('remote_memory');
            $table->string('no_left_right_disorientation');
            $table->string('no_finger_agnosia');
            $table->string('no_acalculia');
            $table->string('no_agraphia');
            $table->string('no_agraphesthesia');
            $table->string('no_astereognosis');
            $table->string('no_apraxia');
            $table->string('no_neglect');
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
        Schema::dropIfExists('neuro_mental_statuses');
    }
};
