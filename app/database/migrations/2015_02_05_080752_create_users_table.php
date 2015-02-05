<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->string('username')->unique(); //nombre de usuario | es unico
            $table->string('password'); //contraseña del usuario
            $table->string('email')->unique(); //email del usuario
            $table->integer('rol_id')->unsigned(); //rol del usuairo | sin asignar
            $table->boolean('state')->default(1); //estado del lugar
            $table->foreign('rol_id')->references('id')->on('roles'); //llave foranea rol
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
