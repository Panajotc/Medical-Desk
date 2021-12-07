<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatianagraficisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datianagraficis', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("cogname");
            $table->string("email");
            $table->bigInteger("cellulare");
            $table->string("nazionalita");
            $table->integer("code_di_fiscale");
            $table->date("date");
            $table->integer("Comune_residenca");
            $table->integer("Cap");
            $table->string("Indirizzo");
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datianagrafici');
    }
}
