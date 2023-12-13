<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->bigInteger('alumni_details_id');
            $table->date('dob');
            $table->string('address');
            $table->string('contact');
            $table->string('profession');
            $table->string('company_name');
            $table->string('designation');
            $table->text('experience');
            $table->integer('Year_joined');
            $table->integer('Year_graduated');
            $table->string('gender');
            $table->string('course');
            $table->string('profile_image');
            $table->string('linkedin_id');
            $table->boolean('validate')->default(0);
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
        Schema::dropIfExists('profile');
    }
}
