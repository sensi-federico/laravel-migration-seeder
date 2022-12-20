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
            $table->string('azienda', 70);
            $table->string('stazione_di_partenza');
            $table->string('stazione_di_arrivo');
            $table->string('orario_di_partenza', 10);
            $table->string('orario_di_arrivo', 10);
            $table->integer('codice_treno');
            $table->integer('numero_carrozze')->nullable();
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
};
