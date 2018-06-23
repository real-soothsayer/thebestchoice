<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostedArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posted_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 255);
            $table->string('categorie', 255);
            $table->bigInteger('prix');
            $table->string('description', 1024);
            $table->string('userfile', 255);
            $table->integer('id_utilisateur');
            $table->timestamp('date_publication')->useCurrent();
            $table->string('est_supprime', 1)->default('0');
            $table->timestamp('date_modification')->nullable();
            $table->string('slug', 153);
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
        Schema::dropIfExists('posted_articles');
    }
}
