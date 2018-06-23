<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->string('login', 100);
            $table->string('email', 100);
            $table->string('password', 100);
            $table->tinyInteger('est_connecte')->default(0)->comment('0 : non connecté; 1 : connecté');
            $table->tinyInteger('statut')->default(0)->comment('0 : inactif; 1 : actif');
            $table->tinyInteger('est_acheteur')->default(0)->comment('0 : pas acheteur; 1 : acheteur');
            $table->tinyInteger('est_vendeur')->default(0)->comment('0 : pas vendeur; 1 : vendeur');
            $table->string('telephone', 50)->nullable();
            $table->string('avatar', 255)->comment("chemin d'accès à l'avatar de l'utilisateur");
            $table->tinyInteger('newsletter')->comment("1:inscrit à la newsletter; 0:pas inscrit à la newsletter");
            $table->timestamps();

            $table->unique('login');
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
