<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('foods', function(Blueprint $table)
		{
            $table -> increments('id'); // ID Autoincrement Primary Key
            $table -> string('name')->unique(); // Nombre del alimento

            // Propiedades del alimento
            $table -> double('calories');
            $table -> double('protein');
            $table -> double('fats');
            $table -> double('hydrates');
            $table -> double('sugars');
            $table -> double('fiber');
            $table -> double('salt');

            // Clave foránea
            $table -> integer('group_id')->unsigned();
            $table->foreign('group_id')
                -> references('id')
                -> on('groups')
                -> onDelete('cascade');

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
		Schema::drop('foods');
	}

}
