<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->bigInteger('creator_id', false)->unsigned()->nullable();
            $table->foreign('creator_id', 'creator_id')->references('id')->on('users');
            $table->string('title', 255);
            $table->string('content', 1000);
            $table->bigInteger('status_id', false)->unsigned()->nullable();
            $table->foreign('status_id', 'status_id')->references('id')->on('statuses');
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
        Schema::dropIfExists('tasks');
    }
}
