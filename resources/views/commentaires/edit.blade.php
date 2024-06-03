<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier le commentaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Modifier le commentaire</h1>
        <form action="{{ route('commentaires.update', $commentaire->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom_complet_auteur">Nom complet</label>
                <input type="text" class="form-control" id="nom_complet_auteur" name="nom_complet_auteur" value="{{ $commentaire->nom_complet_auteur }}" required>
            </div>
            <div class="form-group">
                <label for="contenu">Description</label>
                <textarea class="form-control" id="contenu" name="contenu" rows="4" required>{{ $commentaire->contenu }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
