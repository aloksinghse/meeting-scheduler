<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');;
            $table->text('notes');
            $table->string('guests_name')->nullable();
            $table->string('guests_email');
            // $table->timestamp('date')->nullable();
            $table->timestamp('from')->nullable();
            $table->integer('duration');
            $table->timestamps();

            // $table->foreign('user_id')
            //     ->references('id')->on('users')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetups');
    }
}