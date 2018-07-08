<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_userid')->unsigned();
            $table->string('name', 100);
            $table->string('occupation', 100);
            $table->longText('quote');
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
        Schema::table('quotes', function (Blueprint $table) {
            $table->dropForeign('quotes_fk_userid_foreign');
        });

        Schema::table('quotes', function (Blueprint $table) {
            $table->dropIndex('quotes_fk_userid_foreign');
        });

        Schema::table('quotes', function (Blueprint $table) {
            $table->integer('fk_userid')->change();
        });
        Schema::dropIfExists('quotes');
    }
}
