<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   


        //inseriamo tutti i dettagli che descrivono l'oggetto
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            //autore, editore, prezzo, numero pagine, cadenza uscita, foto copertina
            $table->string('author');
            $table->string('publisher');
            $table->float('page_number');
            $table->string('relase');
            $table->float('price');
            $table->string('photo');
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
        Schema::dropIfExists('comics');
    }
}
