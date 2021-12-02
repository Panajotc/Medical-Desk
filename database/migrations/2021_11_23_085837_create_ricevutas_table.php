<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRicevutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ricevutas', function (Blueprint $table) {
            $table->id("id");
            $table->foreign('id')->references('idpersoni')->on('datianagraficis');
            $table->string("firstname");
            $table->string("lastname");
            $table->integer("tax_code");
            $table->string("gmail");
            $table->string("street_address");
            $table->string("city");
            $table->integer("postal_code");
            $table->string("province");
            $table->string("country");
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ricevutas');
    }
}
