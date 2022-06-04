<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactureFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('categorie');
            $table->string('num');
            $table->string('fournisseur');
            $table->string('numref');
            $table->string('titre');
            $table->string('qte');
            $table->string('prixunitaire');
            $table->string('description');
            $table->string('taxe');
            $table->string('conditiongeneral');
            $table->string('remise');
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
        Schema::dropIfExists('facture_fournisseurs');
    }
}
