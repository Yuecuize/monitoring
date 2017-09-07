<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComtabiliteEnergetiqueComtabiliteEnergetiquesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comtabiliteenergetique__comtabiliteenergetiques', function(Blueprint $table) {
			$table->engine = 'InnoDB';

            $table->increments('id');

            $table->string('name');

            $table->text('content');

            $table->string('url');
            // Your fields
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
		Schema::drop('comtabiliteenergetique__comtabiliteenergetiques');
	}
}
