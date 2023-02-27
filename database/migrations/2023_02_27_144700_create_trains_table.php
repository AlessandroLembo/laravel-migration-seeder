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
            $table->string('Azienda', 30);
            $table->string('Stazione di partenza', 50);
            $table->string('Stazione di arrivo', 50);
            $table->string('Data', 12);
            $table->float('Orario di partenza', 4, 2);
            $table->float('Orario di arrivo', 4, 2);
            $table->string('Codice treno', 40);
            $table->tinyInteger('Numero carrozze')->unsigned();
            $table->boolean('In orario')->default(1);
            $table->boolean('Cancellato')->default(0);
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
