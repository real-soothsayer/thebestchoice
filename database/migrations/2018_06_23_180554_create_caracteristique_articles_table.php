<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristiqueArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristique_articles', function (Blueprint $table) {
            $table->integer('id_caracteristique');
            $table->integer('id_article');
            $table->integer('valeur');

            $table->primary(['id_caracteristique', 'id_article']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristique_articles');
    }
}
