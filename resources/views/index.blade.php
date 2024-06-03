<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deuxieme CRUD sur Laravel avec deux tables</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
           
            height: 94%;
            margin: 0;
            opacity: 90px;
            background-color: rgba(0, 0, 0, 0.5); /* Noir avec une opacité de 50% */
            
        }
        .bg {
    background-image: url('/images/image8.jpeg');
    height: 99%; /* Utilisez 100vh pour 100% de la hauteur de la vue */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    font-size: 25px;
    
}
.centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
.navbar-nav {
    margin-left: auto !important;
    color: black;
    font-size: 25px;
    padding: 20px;
}
.navbar-brand{
    padding: 20px;
}
/* Ajoutez une classe pour le contenu principal */
.main-content {
    min-height: calc(100% - 70px); /* 70px pour tenir compte de la hauteur du footer */
    /* Autres styles... */
}

footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 70px; /* Hauteur du footer */
    background-color: #f1f1f1;
    text-align: center;
    padding: 10px;
}
.btn btn-sm btn-outline-secondary{
    color: #f1f1f1;
    top: 10px;
    

}
.text-align: center{
    top:89px;
}
.btn {
        color: #f1f1f1;
        font-size: 20px;
    }

    /* Style pour le survol */
    .btn:hover {
        background-color: #0624ba; /* Couleur de fond sombre */
        border-color: #47a9f8ee; /* Couleur de la bordure sombre */
    }

</style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="path_to_logo.png" alt="Logo" style="width:40px;"> 
            </a>

             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>


              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/articles">Listes des articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/acticles/read">Voir details</a>
                    </li>
                    </ul>
              </div>
        </nav>
    </header>

    <div class="bg">
        <div class="centered">
            <h1 style="text-align: center; margin-bottom: 20px; color: #f1f1f1;">Bienvenue sur notre blog d'articles!</h1>
            <p style="text-align: center; margin-bottom: 20px; color: #f1f1f1;">Découvrez les derniers articles et partagez vos idées avec notre communauté.</p>
            <a href="articles">
                <button type="button" class="btn btn-sm btn-outline-secondary" style="color: #f1f1f1;">Démarrer</button>
            </a>
        </div>
    </div>
    
                
            
       <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
     </footer>
</body>
</html>

