<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veilles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_produit', 100);
            $table->string('nom_produit', 500);
            $table->integer('id_utilisateur');
            $table->string('vendeur', 100);
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
        Schema::dropIfExists('veilles');
    }
}
