<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JoinTableFournisseurswithproduits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produits', function (Blueprint $table) {
            $table->integer('fournisseur_id')->unsigned()->index()->nullable();
          
        });
        Schema::table('stocks', function (Blueprint $table) {
            $table->integer('produit_id')->unsigned()->index()->nullable();
          
        });
        Schema::table('reservations', function (Blueprint $table) {
            $table->integer('service_id')->unsigned()->index()->nullable();
          
        });
        Schema::table('tickets', function (Blueprint $table) {
            $table->integer('service_id')->unsigned()->index()->nullable();
          
        });
       

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
