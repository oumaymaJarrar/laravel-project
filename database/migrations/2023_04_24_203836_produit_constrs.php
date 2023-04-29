<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProduitConstrs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_constrs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_produit_const');
            $table->string('code_barre');
            $table->integer('lot_optimal');
            $table->string('type_produit');
            $table->integer('id_machine');
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
        //
    }
}
