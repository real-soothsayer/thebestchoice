<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScrapingDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scraping_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku_code', 100);
            $table->timestamp('extraction_date')->useCurrent();
            $table->string('name', 500);
            $table->string('categorie', 100);
            $table->string('website', 100);
            $table->string('url', 500);
            $table->bigInteger('price');
            $table->string('currency', 100)->nullable();
            $table->string('features', 1000)->nullable();
            $table->boolean('availability')->nullable();
            $table->string('image', 500);
            $table->string('image_big', 500)->nullable();
            $table->string('status', 1)->default('T')->comment("T: Temporaire, lorsqu'on est encore en train d'insérer, P: principal: scraping terminé, peut être utilisé pour la recherche");
            $table->timestamps();
            $table->string('deleted', 1)->default('0');

            $table->index(['website', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scraping_datas');
    }
}
