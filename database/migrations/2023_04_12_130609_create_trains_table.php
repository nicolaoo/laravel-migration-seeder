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
            $table->string('stazione di partenza', 100);
            $table->string('stazione di arrivo', 100);
            $table->time('orario di partenza');
            $table->time('orario di arrivo');
            $table->unsignedSmallInteger('codice treno');
            $table->unsignedTinyInteger('Numero Carrozze');
            $table->unsignedTinyInteger('In Orario')->default(0);
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
