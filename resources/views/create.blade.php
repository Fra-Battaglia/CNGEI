<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @vite(['resources/css/style.css'])
    @endif

    <title>Registrazione Iscritto</title>
</head>
<body>
    <div class="container">
        <h1 class="text-4xl font-bold mt-8">Registrazione Iscritto</h1>

        @if ($errors->any())
            <div class="alert text-secondary mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('iscritto.store') }}" method="POST" class="grid-cols-2">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cognome">Cognome:</label>
                <input type="text" id="cognome" name="cognome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="numero_di_tessera">Numero di Tessera:</label>
                <input type="text" id="numero_di_tessera" name="numero_di_tessera" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="data_di_nascita">Data di Nascita:</label>
                <input type="date" id="data_di_nascita" name="data_di_nascita" class="form-control">
            </div>
            <div class="form-group">
                <label for="luogo_di_nascita">Luogo di Nascita:</label>
                <input type="text" id="luogo_di_nascita" name="luogo_di_nascita" class="form-control">
            </div>
            <div class="form-group">
                <label for="indirizzo">Indirizzo:</label>
                <input type="text" id="indirizzo" name="indirizzo" class="form-control">
            </div>
            <div class="form-group">
                <label for="numero_di_telefono">Numero di Telefono:</label>
                <input type="text" id="numero_di_telefono" name="numero_di_telefono" class="form-control">
            </div>
            <div class="form-group">
                <label for="genere">Genere:</label>
                <input type="text" id="genere" name="genere" class="form-control">
            </div>
            <div class="form-group">
                <label for="anni_di_scoutismo">Anni di Scoutismo:</label>
                <input type="number" id="anni_di_scoutismo" name="anni_di_scoutismo" class="form-control">
            </div>
            <div class="form-group">
                <label for="ruolo">Ruolo:</label>
                <input type="text" id="ruolo" name="ruolo" class="form-control">
            </div>
            <div class="form-group">
                <label for="anni_in_unità">Anni in Unità:</label>
                <input type="number" id="anni_in_unità" name="anni_in_unità" class="form-control">
            </div>
            <div class="form-group">
                <label for="progressione_orizzontale">Progressione Orizzontale:</label>
                <input type="text" id="progressione_orizzontale" name="progressione_orizzontale" class="form-control">
            </div>
            <div class="form-group">
                <label for="progressione_verticale">Progressione Verticale:</label>
                <input type="text" id="progressione_verticale" name="progressione_verticale" class="form-control">
            </div>
            <div class="form-group">
                <label for="pattuglia">Pattuglia:</label>
                <input type="text" id="pattuglia" name="pattuglia" class="form-control">
            </div>
            <div class="form-group">
                <label for="gruppo">Gruppo:</label>
                <input type="text" id="gruppo" name="gruppo" class="form-control">
            </div>
            <div class="form-group">
                <label for="branca">Branca:</label>
                <input type="text" id="branca" name="branca" class="form-control">
            </div>
            <div class="form-group">
                <label for="promessa">Promessa:</label>
                <input type="boolean" id="promessa" name="promessa" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Registra</button>
        </form>
    </div>
</body>
</html>