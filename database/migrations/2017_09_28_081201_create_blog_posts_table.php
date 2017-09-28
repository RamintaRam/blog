<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_posts', function(Blueprint $table)
		{
			$table->timestamps();
			$table->softDeletes();
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->integer('count', true);
			$table->string('resource_id', 36)->nullable()->index('fk_blog_posts_blog_resources1_idx');
			$table->string('title', 250);
			$table->string('text', 10000);
			$table->string('link', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blog_posts');
	}

}
