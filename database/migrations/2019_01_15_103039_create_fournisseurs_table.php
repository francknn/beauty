<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('code');
            $table->string('adresse');
            $table->string('email');
            $table->integer('telephone');
            $table->timestamps();
        });
        Schema::table('commandes', function (Blueprint $table) {
            $table->integer('fournisseur_id')->unsigned()->index()->nullable();
          
        });
       
        Schema::table('equipements', function (Blueprint $table) {
            $table->integer('fournisseur_id')->unsigned()->index()->nullable();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fournisseurs');
    }
}
