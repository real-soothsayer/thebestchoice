<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_produit', 100);
            $table->string('nom_produit', 500);
            $table->integer('id_utilisateur');
            $table->string('vendeur', 100);
            $table->integer('note')->comment("note sur 5");
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
        Schema::dropIfExists('product_notes');
    }
}
