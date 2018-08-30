<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_userid')->unsigned();
            $table->string('campaign_name',255);
            $table->longText('content',255);
            $table->string('hyperlink',255);
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
        Schema::table('campaigns', function (Blueprint $table) {
            $table->dropForeign('campaigns_fk_userid_foreign');
        });

        Schema::table('campaigns', function (Blueprint $table) {
            $table->dropIndex('campaigns_fk_userid_foreign');
        });

        Schema::table('campaigns', function (Blueprint $table) {
            $table->integer('fk_userid')->change();
        });

        Schema::dropIfExists('campaigns');
    }
}
