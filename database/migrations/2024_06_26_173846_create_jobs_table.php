<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->integer('job_salary')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('food_provided')->nullable();
            $table->string('accommodation_provided')->nullable();
            $table->string('contract_period')->nullable();
            $table->string('probation_period')->nullable();
            $table->string('job_img')->nullable();
            $table->longText('job_desc')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
