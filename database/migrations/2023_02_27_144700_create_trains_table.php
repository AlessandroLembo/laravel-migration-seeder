<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 30);
            $table->string('stazione_di_partenza', 50);
            $table->string('stazione_di_arrivo', 50);
            $table->string('data', 30);
            $table->float('orario_di_partenza', 4, 2);
            $table->float('orario_di_arrivo', 4, 2);
            $table->string('codice_treno', 40);
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
