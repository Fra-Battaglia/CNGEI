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
        Schema::create('iscritti', function (Blueprint $table) {
            $table->string('nome');
            $table->string('cognome');
            $table->string('email')->unique();
            $table->integer('numero_di_telefono');
            $table->string('genere');
            $table->string('indirizzo');
            $table->date('data_di_nascita');
            $table->string('luogo_di_nascita')->nullable();
            $table->integer('anni_in_unità');
            $table->integer('anni_di_scoutismo');
            $table->string('progressione_orizzontale')->nullable();
            $table->string('progressione_verticale')->nullable();
            $table->integer('numero_di_tessera')->unique();
            $table->string('ruolo');
            $table->string('pattuglia');
            $table->string('gruppo');
            $table->string('branca');
            $table->boolean('promessa');
            $table->uuid('id')->primary();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iscritti');
    }
};
