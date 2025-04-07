<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iscritto extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'iscritti';
    protected $fillable = [
        'nome',
        'cognome',
        'email',
        'numero_di_tessera',
        'data_di_nascita',
        'luogo_di_nascita',
        'indirizzo',
        'numero_di_telefono',
        'genere',
        'anni_di_scoutismo',
        'ruolo',
        'anni_in_unità',
        'progressione_orizzontale',
        'progressione_verticale',
        'pattuglia',
        'gruppo',
        'branca',
        'promessa',
    ];
}
