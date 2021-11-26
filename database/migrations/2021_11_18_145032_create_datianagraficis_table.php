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
        Schema::create('datianagrafici', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("cogname");
            $table->string("email");
            $table->bigInteger("cellulare");
            $table->string("nazionalita");
            $table->integer("code_di_fiscale");
            $table->date("date");
            $table->boolean("male");
            $table->boolean("female");
            $table->integer("Comune_residenca");
            $table->integer("Cap");
            $table->string("Indirizzo");
        });
        Schema::rename('datianagrafici', 'datianagraficis');
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
