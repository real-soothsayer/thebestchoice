<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosVendeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos_vendeurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('situation_geographique', 255);
            $table->string('zone_couverte', 255);
            $table->string('nom_organisation', 255);
            $table->integer('type_produits');
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
        Schema::dropIfExists('infos_vendeurs');
    }
}
