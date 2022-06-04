<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('prenom');
            $table->string('nom');
            $table->string('entreprise');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('site');
            $table->string('type');
            $table->string('numfiscale');
            $table->string('condition');
            $table->string('activite');
            $table->string('devise');
            $table->string('adressefact');
            $table->string('etatfact');
            $table->string('cpfact');
            $table->string('paysfact');

            $table->string('adresseliv');
            $table->string('etatliv');    
            $table->string('cpliv');
            $table->string('paysliv');
            $table->string('remarques');
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
        Schema::dropIfExists('clients');
    }
}
