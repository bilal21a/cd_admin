<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name')->nullable();
            $table->string('applicant_email')->nullable();
            $table->string('applicant_phone')->nullable();
            $table->longText('applicant_address')->nullable();
            $table->string('applicant_country')->nullable();
            $table->string('applicant_gender')->nullable();
            $table->longText('applicant_passport_number')->nullable();
            $table->string('applicant_image')->nullable();
            $table->string('applicant_dob')->nullable();
            $table->longText('job_id')->nullable();
            $table->longText('applicant_uci')->nullable();
            $table->longText('applicant_ref_no')->nullable();
            $table->longText('applicant_tracking_no')->nullable();
            $table->string('applicant_due_date')->nullable();
            $table->string('applicant_payment_status')->nullable();
            $table->string('receipt_amount')->nullable();
            $table->string('passport_image')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
