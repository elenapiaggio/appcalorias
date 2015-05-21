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
            $table -> increments('id'); // ID autoincrement
            $table -> string('name')->unique(); // Nombre del alimento

            $table -> integer('property_id')->unsigned();
            $table -> foreign('property_id')
                -> references('id')
                -> on('properties')
                -> onDelete('cascade');

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
