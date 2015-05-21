<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table)
		{
			$table->increments('id');

            $table->date('birthdate'); // fecha nacimiento
            $table->integer('height'); // altura
            $table->integer('weight'); // peso
            $table->enum('type_activity',['sedentary','light', 'moderate','intense','extremely_high']); // tipo de actividad
            $table->enum('sex',['female','male']); // sexo

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_profiles');
	}

}
