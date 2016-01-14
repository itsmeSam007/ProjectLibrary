<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookIssues', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('bk_issue_user_id')->unsigned();
			$table->foreign('bk_issue_user_id')->references('id')->on('users');
			$table->integer('user_book_id')->unsigned();
			$table->foreign('user_book_id')->references('id')->on('books');
            $table->integer('status');
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
        Schema::drop('bookIssues');
    }
}
