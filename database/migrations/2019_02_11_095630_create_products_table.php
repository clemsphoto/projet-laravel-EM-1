<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100); // VARCHAR 100 (100 caractere max)
            $table->text('description'); //text null
            $table->decimal('price', 6, 2); // 1er chiffre totzl des chiffre et 2eme les nombre de chiffre apres la virgule
            $table->enum('size', ['36','38','40','42','44','46','48','50','52']);
            $table->string('url_image',100)->nullable(); // VARCHAR 100 (100 caractere max)
            $table->enum('status', ['publié', 'brouillon']);
            $table->enum('code', ['solde', 'new']);
            $table->string('reference',100)->unique(); // VARCHAR 100 (100 caractere max)
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
        Schema::dropIfExists('products');
    }
}
