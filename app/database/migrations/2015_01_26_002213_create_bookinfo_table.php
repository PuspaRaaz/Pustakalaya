<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookinfoTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (!Schema::hasTable('bookinfo')) {
      Schema::create('bookinfo', function(Blueprint $table) {
        // The isbn, which is the primary key. It may have significant
        // leading zeroes, so a string format is used.
        $table->string('isbn',16);
        // These three fields have a max.length of 256 because name,
        // author(s)name and publisher-name may be very long.
        $table->string('name',256);
        $table->string('author',256);
        $table->string('publisher',256);
        $table->integer('type_id')->unsigned();
        // Set the key constraints
        $table->primary('isbn');
        $table->foreign('type_id')->references('id')->on('booktypes');
      });
    }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('bookinfo');
  }

}