<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitreToArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('titre')->default('');
            $table->string('prixvente')->default('');;
            $table->string('prixachat')->default('');;
            $table->string('type')->default('');;
            $table->string('destin')->default('');;
            $table->string('description')->default('');;
            $table->string('reference')->default('');;
            $table->string('taxe')->default('');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
