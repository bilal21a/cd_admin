<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->integer('insurance_policy_no')->nullable();
            $table->string('insurance_date_to')->nullable();
            $table->string('insurance_date_from')->nullable();
            $table->integer('insurance_fee')->nullable();
            $table->string('insurance_payment_status')->nullable();
            $table->integer('insurance_application_id')->nullable();
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
        Schema::dropIfExists('insurances');
    }
}
