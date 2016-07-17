<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrationsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // Shard method: CREATE TABLE registrations_{$dayNum % 8}_{$clinic_id % 10}
        for ($dayNum = 0; $dayNum < 8; ++$dayNum) {
            for ($clinicId = 0; $clinicId < 10; ++$clinicId) {
                Schema::create('registrations_' . $dayNum . '_' . $clinicId, function(Blueprint $table)
                {
                    $table->smallInteger('clinic_id')->unsigned();
                    $table->integer('doctor_id')->unsigned();
                    $table->integer('client_id')->unsigned();
                    $table->index(['clinic_id','doctor_id'], 'clinic_doctor');
                });
            }
        }
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        for ($dayNum = 0; $dayNum < 8; ++$dayNum) {
            for ($clinicId = 0; $clinicId < 10; ++$clinicId) {
                Schema::drop('registrations_' . $dayNum . '_' . $clinicId);
            }
        }
	}

}
