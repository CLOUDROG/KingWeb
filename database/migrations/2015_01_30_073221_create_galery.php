<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalery extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
            
            Schema::create('galery', function($table) {
                //required columns
                $table->increments('id'); 
                $table->timestamps();
                //picture info
                $table->string('title');
                $table->text('description');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('galery');
	}

}
