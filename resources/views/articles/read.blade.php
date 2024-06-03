<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voir un détail d'article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .comment-section {
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .comment-form {
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .card-body img {
            max-width: 100%;
            height: auto;
        }
        .card.mb-2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Voir un détail de l'article</h1>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">{{ $article->nom }}</h5>
                <p class="card-text">Description: {{ $article->description }}</p>
                <p class="card-text">Date de création: {{ $article->date_creation }}</p>
                <p class="card-text">Type: {{ $article->type }}</p>
                <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->nom }}">
                <a href="{{ route('articles.list') }}" class="btn btn-primary mt-3">Retour à la liste des articles</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <!-- Formulaire pour ajouter un commentaire -->
            <div class="col-md-6 comment-form">
                <h2>Ajouter un commentaire</h2>
                <form action="{{ route('commentaires.store', ['article_id' => $article->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nom_complet_auteur">Nom complet</label>
                        <input type="text" class="form-control" id="nom_complet_auteur" name="nom_complet_auteur" required>
                    </div>
                    <div class="form-group">
                        <label for="contenu">Description</label>
                        <textarea class="form-control" id="contenu" name="contenu" rows="4" required></textarea>
                    </div>
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </div>
            <!-- Vos commentaires -->
            <div class="col-md-6 comment-section">
                <h2>Vos commentaires</h2>
                @if($article->commentaires->isEmpty())
                    <p>Aucun commentaire pour cet article.</p>
                @else
                    @foreach($article->commentaires as $commentaire)
                        <div class="card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">{{ $commentaire->nom_complet_auteur }}</h5>
                                <p class="card-text">{{ $commentaire->contenu }}</p>
                                <p class="card-text"><small class="text-muted">{{ $commentaire->created_at->format('d/m/Y H:i') }}</small></p>
                                
                                <a href="{{ route('commentaires.edit', $commentaire->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('commentaires.delete', $commentaire->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</body>
</html>


















{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voir un détail d'article</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .comment-section {
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .comment-form {
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .card-body img {
            max-width: 100%;
            height: auto;
        }
        .card.mb-2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Voir un détail de l'article</h1>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">{{ $article->nom }}</h5>
                <p class="card-text">Description: {{ $article->description }}</p>
                <p class="card-text">Date de création: {{ $article->date_creation }}</p>
                <p class="card-text">Type: {{ $article->type }}</p>
                <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->nom }}">
                <a href="{{ route('articles.list') }}" class="btn btn-primary mt-3">Retour à la liste des articles</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <!-- Formulaire pour ajouter un commentaire -->
            <div class="col-md-6 comment-form">
                <h2>Ajouter un commentaire</h2>
                <form action="{{ route('commentaires.store', ['article_id' => $article->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nom_complet_auteur">Nom complet</label>
                        <input type="text" class="form-control" id="nom_complet_auteur" name="nom_complet_auteur" required>
                    </div>
                    <div class="form-group">
                        <label for="contenu">Description</label>
                        <textarea class="form-control" id="contenu" name="contenu" rows="4" required></textarea>
                    </div>
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </div>
            <!-- Vos commentaires -->
            <div class="col-md-6 comment-section">
                <h2>Vos commentaires</h2>
                @if($article->commentaires->isEmpty())
                    <p>Aucun commentaire pour cet article.</p>
                @else
                    @foreach($article->commentaires as $commentaire)
                        <div class="card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">{{ $commentaire->nom_complet_auteur }}</h5>
                                <p class="card-text">{{ $commentaire->contenu }}</p>
                                <p class="card-text"><small class="text-muted">{{ $commentaire->created_at->format('d/m/Y H:i') }}</small></p>
                                
                                <a href="{{ route('commentaires.edit', $article->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('commentaires.delete', $article->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</body>
</html> --}}
