<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchPredictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_predicts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_recherche', 100);
            $table->string('libelle_recherche', 500);
            $table->integer('nombre_occurences');
            $table->timestamps();

            $table->index('code_recherche');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_predicts');
    }
}
