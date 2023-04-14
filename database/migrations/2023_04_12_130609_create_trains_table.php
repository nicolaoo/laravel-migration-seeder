<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda', 50);
            $table->string('stazione_di_partenza', 100);
            $table->string('stazione_di_arrivo', 100);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->unsignedSmallInteger('codice_treno');
            $table->unsignedTinyInteger('Numero_Carrozze');
            $table->unsignedTinyInteger('In_Orario')->default(0);
            $table->unsignedTinyInteger('Cancellato')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
