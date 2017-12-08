<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questioners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('answer');
            $table->text('answer_items');
            $table->string('username');
            $table->string('category_name');
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
        Schema::drop('questioners');
    }
}
