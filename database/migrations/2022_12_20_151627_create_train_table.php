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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 70);
            $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->string('Orario di partenza', 10);
            $table->string('Orario di arrivo', 10);
            $table->int('Codice treno');
            $table->int('Numero Carrozze')->nullable();
            $table->boolean('In orario')->default(1);
            $table->boolean('Cancellato')->default(0);
            $table->timestamps();
        });


        // Azienda
        // Stazione di partenza
        // Stazione di arrivo
        // Orario di partenza
        // Orario di arrivo
        // Codice Treno
        // Numero Carrozze
        // In orario
        // Cancellato
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train');
    }
};
