<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
	    // added by framework
	    $table->increments('id');
	    $table->string('name');
	    $table->string('email')->unique();

	    // can't have more than one auto column
            // $table->increments('user_id');

	    // added for rcs-demo
            $table->string('username')->unique()->default('user');

	    // added by framework
            $table->string('password');

	    // added for rcs-demo
            $table->date('creation_date')->default('1970-01-01');

	    // added by framework
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
