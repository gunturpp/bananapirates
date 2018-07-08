<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_userid')->unsigned();
            $table->string('product_name',100);
            $table->integer('fk_category')->unsigned();
            $table->integer('price');
            $table->integer('size');
            $table->string('pictures',255)->null();
            $table->timestamps();

            $table->foreign('fk_userid')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fk_category')->references('id')->on('category_stores')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->dropForeign('stores_fk_userid_foreign');
            $table->dropForeign('stores_fk_category_foreign');
        });

        Schema::table('stores', function (Blueprint $table) {
            $table->dropIndex('stores_fk_userid_foreign');
            $table->dropIndex('stores_fk_category_foreign');
        });

        Schema::table('stores', function (Blueprint $table) {
            $table->integer('fk_userid')->change();
            $table->integer('fk_category')->change();
        });
        Schema::dropIfExists('stores');
    }
}
