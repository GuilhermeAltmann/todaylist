<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->text('task');
            $table->date('date_finished')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('tasks', function (Blueprint $table) {

            $table->dropForeign('tasks_user_id_foreign');
        });

        Schema::dropIfExists('tasks');
    }
}
