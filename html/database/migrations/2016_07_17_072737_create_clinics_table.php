<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClinicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clinics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 100);
		});

        // Заполним тестовыми данными
        for ($i = 0; $i < 100; ++$i) {
            DB::table('clinics')->insert(
                ['title' => 'Клиника №' . $i]
            );
        }
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clinics');
	}

}
