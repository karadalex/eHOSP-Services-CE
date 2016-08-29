<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GisRemoteNodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gis_remote_nodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('continent');
            $table->string('country');
            $table->string('region');
            $table->string('nearest_city');
            $table->float('latitude');
            $table->float('longitude');
            $table->float('elevation');
            $table->bigInteger('population');
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gis_remote_nodes');
    }
}
