<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @vite(['resources/css/style.css'])
    @endif

    <title>Modifica Iscritto</title>
</head>
<body>
    <div class="container">
        <h1 class="text-4xl font-bold mt-8">Modifica Iscritto</h1>

        @if ($errors->any())
            <div class="alert text-secondary mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('iscritto.update', $iscritto->id) }}" method="POST" class="grid-cols-2">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome', $iscritto->nome) }}" required>
            </div>
            <div class="form-group">
                <label for="cognome">Cognome:</label>
                <input type="text" id="cognome" name="cognome" class="form-control" value="{{ old('cognome', $iscritto->cognome) }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $iscritto->email) }}" required>
            </div>
            <div class="form-group">
                <label for="numero_di_tessera">Numero di Tessera:</label>
                <input type="text" id="numero_di_tessera" name="numero_di_tessera" class="form-control" value="{{ old('numero_di_tessera', $iscritto->numero_di_tessera) }}" required>
            </div>
            <div class="form-group">
                <label for="data_di_nascita">Data di Nascita:</label>
                <input type="date" id="data_di_nascita" name="data_di_nascita" class="form-control" value="{{ old('data_di_nascita', $iscritto->data_di_nascita) }}">
            </div>
            <div class="form-group">
                <label for="luogo_di_nascita">Luogo di Nascita:</label>
                <input type="text" id="luogo_di_nascita" name="luogo_di_nascita" class="form-control" value="{{ old('luogo_di_nascita', $iscritto->luogo_di_nascita) }}">
            </div>
            <div class="form-group">
                <label for="indirizzo">Indirizzo:</label>
                <input type="text" id="indirizzo" name="indirizzo" class="form-control" value="{{ old('indirizzo', $iscritto->indirizzo) }}">
            </div>
            <div class="form-group">
                <label for="numero_di_telefono">Numero di Telefono:</label>
                <input type="text" id="numero_di_telefono" name="numero_di_telefono" class="form-control" value="{{ old('numero_di_telefono', $iscritto->numero_di_telefono) }}">
            </div>
            <div class="form-group">
                <label for="genere">Genere:</label>
                <input type="text" id="genere" name="genere" class="form-control" value="{{ old('genere', $iscritto->genere) }}">
            </div>
            <div class="form-group">
                <label for="anni_di_scoutismo">Anni di Scoutismo:</label>
                <input type="number" id="anni_di_scoutismo" name="anni_di_scoutismo" class="form-control" value="{{ old('anni_di_scoutismo', $iscritto->anni_di_scoutismo) }}">
            </div>
            <div class="form-group">
                <label for="ruolo">Ruolo:</label>
                <input type="text" id="ruolo" name="ruolo" class="form-control" value="{{ old('ruolo', $iscritto->ruolo) }}">
            </div>
            <div class="form-group">
                <label for="anni_in_unità">Anni in Unità:</label>
                <input type="number" id="anni_in_unità" name="anni_in_unità" class="form-control" value="{{ old('anni_in_unità', $iscritto->anni_in_unità) }}">
            </div>
            <div class="form-group">
                <label for="progressione_orizzontale">Progressione Orizzontale:</label>
                <input type="text" id="progressione_orizzontale" name="progressione_orizzontale" class="form-control" value="{{ old('progressione_orizzontale', $iscritto->progressione_orizzontale) }}">
            </div>
            <div class="form-group">
                <label for="progressione_verticale">Progressione Verticale:</label>
                <input type="text" id="progressione_verticale" name="progressione_verticale" class="form-control" value="{{ old('progressione_verticale', $iscritto->progressione_verticale) }}">
            </div>
            <div class="form-group">
                <label for="pattuglia">Pattuglia:</label>
                <input type="text" id="pattuglia" name="pattuglia" class="form-control" value="{{ old('pattuglia', $iscritto->pattuglia) }}">
            </div>
            <div class="form-group">
                <label for="gruppo">Gruppo:</label>
                <input type="text" id="gruppo" name="gruppo" class="form-control" value="{{ old('gruppo', $iscritto->gruppo) }}">
            </div>
            <div class="form-group">
                <label for="branca">Branca:</label>
                <input type="text" id="branca" name="branca" class="form-control" value="{{ old('branca', $iscritto->branca) }}">
            </div>
            <div class="form-group">
                <label for="promessa">Promessa:</label>
                <input type="boolean" id="promessa" name="promessa" class="form-control" value="{{ old('promessa', $iscritto->promessa) }}">
            </div>
            <button type="submit" class="btn btn-primary">Aggiorna</button>
        </form>
    </div>
</body>
</html>