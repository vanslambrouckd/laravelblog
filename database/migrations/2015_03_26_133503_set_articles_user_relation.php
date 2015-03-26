<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetArticlesUserRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articles', function(Blueprint $table)
		{
            $table->integer('user_id')->unsigned();
            //when user deletes account cascade and delete articles that belong to that user
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articles', function(Blueprint $table)
		{
			//
            $table->dropForeign('articles_user_id_foreign');
            $table->dropColumn('user_id');
		});
	}

}
