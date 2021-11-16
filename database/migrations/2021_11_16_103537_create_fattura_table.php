<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFatturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fattura', function (Blueprint $table) {
            $table->id();
            $table->boolean("azienda");
            $table->boolean("personi");
            $table->string("name");
            $table->string("cogname");
            $table->integer("code_di_fiscale");
            $table->string("email");
            $table->string("Indirizzo");
            $table->string("citta");
            $table->integer("Cap");
            $table->string("provinza");
            $table->string("Nazione");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fattura');
    }
}
