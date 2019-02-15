<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('categorie_id')->nullable(); // unsignedInteger crée un clé etrangere // ici on crée une nouvelle colonne et on cree une liaison
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('SET NULL'); // liaison entre cle etrangere 
       
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_categorie_id_foreign'); // (products_categorie... cle qui a ete créee)
            $table->dropColumn('categorie_id'); // ici on supprime la colonne 1er arrivée 1er sortie

        });
    }
}
