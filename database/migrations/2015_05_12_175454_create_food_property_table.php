<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodPropertyTable extends Migration {

	/**
	 * Run the migrations.
     * Migración para la tabla pivot
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('food_property', function(Blueprint $table)
		{
            $table->increments('id');

            $table->integer('food_id')->unsigned();
            $table->foreign('food_id')
                ->references('id')
                ->on('foods')
                ->onDelete('cascade');

            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');

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
		Schema::drop('food_property');
	}

}
