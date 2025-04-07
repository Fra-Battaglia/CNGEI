<?php

namespace App\Http\Controllers;

use App\Models\Iscritto;
use Illuminate\Http\Request;

class IscrittoController extends Controller
{
    public function index()
    {
        $iscritti = Iscritto::all();

        return view('dashboard', compact('iscritti'));
    }

    public function create()
    {
        return view('create');
    }

    public function show($id)
    {
        $iscritto = Iscritto::findOrFail($id);

        return view('iscritto', compact('iscritto'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'numero_di_tessera' => 'required|string|max:255',
            'data_di_nascita' => 'date',
            'luogo_di_nascita' => 'string|max:255',
            'indirizzo' => 'string|max:255',
            'numero_di_telefono' => 'string|max:255',
            'genere' => 'string|max:1',
            'anni_di_scoutismo' => 'integer',
            'ruolo' => 'string|max:255',
            'anni_in_unità' => 'integer',
            'progressione_orizzontale' => 'string|max:255',
            'progressione_verticale' => 'string|max:255',
            'pattuglia' => 'string|max:255',
            'gruppo' => 'string|max:255',
            'branca' => 'string|max:255',
            'promessa' => 'boolean',
        ]);

        Iscritto::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Iscritto creato con successo!');
    }

    public function edit($id)
    {
        $iscritto = Iscritto::findOrFail($id);

        return view('edit', compact('iscritto'));
    }

    public function update(Request $request, $id)
    {
        $iscritto = Iscritto::findOrFail($id);

        $request->validate([
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'numero_di_tessera' => 'required|string|max:255',
            'data_di_nascita' => 'date',
            'luogo_di_nascita' => 'string|max:255',
            'indirizzo' => 'string|max:255',
            'numero_di_telefono' => 'string|max:255',
            'genere' => 'string|max:1',
            'anni_di_scoutismo' => 'integer',
            'ruolo' => 'string|max:255',
            'anni_in_unità' => 'integer',
            'progressione_orizzontale' => 'string|max:255',
            'progressione_verticale' => 'string|max:255',
            'pattuglia' => 'string|max:255',
            'gruppo' => 'string|max:255',
            'branca' => 'string|max:255',
            'promessa' => 'boolean',
        ]);

        $iscritto->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Iscritto aggiornato con successo!');
    }

    public function destroy($id)
    {
        $iscritto = Iscritto::findOrFail($id);

        $iscritto->delete();

        return redirect()->route('dashboard')->with('success', 'Iscritto eliminato con successo!');
    }
}
