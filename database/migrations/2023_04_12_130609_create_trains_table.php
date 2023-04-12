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
            $table->time('orario di partenza', $precision = 0);
            $table->time('orario di arrivo', $precision = 0);
            $table->unsignedSmallInteger('codice treno');
            $table->unsignedTinyInteger('votes');
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
