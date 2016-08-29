<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->enum('gender', ['MALE', 'FEMALE']);
            $table->enum('user_type', [
                'DOCTOR','PATIENT','MEDICAL LAB TECHNICIAN','SURGEON','SURGICAL TECHNOLOGIST',
                'ANESTHESIOLOGIST','PHYSICAL THERAPIST','RADIOLOGIST','RADIOLOGIST TECHNOLOGIST',
                'REGISTERED NURSE','BUSINESS OFFICE','PHYSICIAN','PATIENT ADVOCATE',
                'HEALTH SERVICES MANAGER','MEDICAL CODER','HEALTH INFORMATION TECHNICIAN',
                'PHARMACY TECHNICIAN','PHARMACIST','SOCIAL WORKER','HOSPITAL ADMIN','ROBOTICS MANAGER'
            ]);
            $table->integer('age');
            $table->string('birth_country');
            $table->string('ssn');
            $table->boolean('active')->default(1);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
