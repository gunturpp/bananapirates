<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_userid')->unsigned();
            $table->string('title',255);
            $table->longText('content');
            $table->string('pictures',255)->null();
            $table->timestamps();

            $table->foreign('fk_userid')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
