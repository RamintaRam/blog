<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_resources', function(Blueprint $table)
		{
			$table->timestamps();
			$table->softDeletes();
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->integer('count', true);
			$table->string('path', 250)->nullable();
			$table->string('mime_size', 250)->nullable();
			$table->string('size', 250)->nullable();
			$table->string('width', 250)->nullable();
			$table->string('height', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blog_resources');
	}

}
