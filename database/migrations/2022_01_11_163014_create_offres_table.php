<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('type_habitation');
            $table->bigInteger('cout_loyer');
            $table->bigInteger('cout_charges');
            $table->string('type_chauffage');
            $table->bigInteger('superficie');
            $table->mediumText('description');
            $table->string('adresse');
            $table->string('ville');
            $table->bigInteger('code_postal');
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
        Schema::dropIfExists('offres');
    }
}
