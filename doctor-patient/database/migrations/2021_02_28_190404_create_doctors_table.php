<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_department');
            $table->string('doctor_name');
            $table->string('doctor_email');
            $table->string('doctor_age');
            $table->string('doctor_address');
            $table->string('doctor_number');
            $table->string('doctor_gender');
            $table->string('doctor_image');
            $table->integer('doctor_status');
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
        Schema::dropIfExists('doctors');
    }
}
