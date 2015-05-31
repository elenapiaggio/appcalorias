<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

            // Datos iniciales
            $table->string('first_name'); // nombre
            $table->string('last_name'); // apellido
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->enum('type',['admin','user']); // tipo de usuario

            // Datos para calcular las calorias a consumir
            $table->date('birthdate'); // fecha nacimiento
            $table->integer('height'); // altura
            $table->integer('weight'); // peso
            $table->enum('type_activity',['sedentary','light', 'moderate','intense','extremely_high']); // tipo de actividad
            $table->enum('sex',['female','male']); // sexo

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
