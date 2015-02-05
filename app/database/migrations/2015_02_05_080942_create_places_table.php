<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('places', function(Blueprint $table)
		{
			$table->increments('id'); //id del lugar
            $table->string('name'); //nombre del lugar
            $table->string('description'); //descripcion del lugar
            $table->string('direction'); //direccion del lugar
            $table->string('longitude'); //longitud del lugar | google maps
            $table->string('latitude'); //latitude del lugar | google maps
            $table->integer('points'); //calificacion del lugar
            $table->boolean('state')->default(1);
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
		Schema::drop('places');
	}

}
