<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerAndMedsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('partner_and_medsos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
            $table->string('username',100);
            $table->string('url',255);
            $table->string('logo',255)->null();
            $table->string('category');
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
        Schema::dropIfExists('partner_and_medsos');
    }
}
