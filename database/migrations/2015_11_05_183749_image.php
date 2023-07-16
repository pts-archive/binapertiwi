<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Image extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('assets', function(Blueprint $table)
		{
			$table->text('image')->after('notes')->nullable()->default(NULL);
			//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
  public function down()
   {
       Schema::table('assets', function ($table) {
           $table->dropColumn('image');
       });
   }

}
