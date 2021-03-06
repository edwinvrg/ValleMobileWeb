<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlaceCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('place_category', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('place_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('category_id')->references('id')->on('categorys');
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
		Schema::drop('place_category');
	}

}
