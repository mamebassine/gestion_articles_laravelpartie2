<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;

Route::get('/', function () {
    return view('index');
});

Route::get('articles', [ArticleController::class, 'index'])->name('articles.list'); // Route pour index

Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create'); // fAjout, afficher le formulaire de création d'article 

Route::post('articles', [ArticleController::class, 'store'])->name('articles.store'); // fAjout,traiter la création d'article

// Route pour supprimer un article
Route::delete('articles/{id}', [ArticleController::class, 'destroy'])->name('articles.delete');

// Route pour afficher le formulaire voir detaille d'un article
Route::get('articles/{id}/read', [ArticleController::class, 'read'])->name('articles.read');


// Afficher le formulaire d'édition d'un article
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

// Mettre à jour un article existant
Route::put('articles/{id}', [ArticleController::class, 'update'])->name('articles.update');





Route::post('/commentaires/{article_id}', [CommentaireController::class, 'store'])->name('commentaires.store');





Route::post('commentaires/store/{article_id}', [CommentaireController::class, 'store'])->name('commentaires.store');
Route::get('commentaires/edit/{id}', [CommentaireController::class, 'edit'])->name('commentaires.edit');
Route::put('commentaires/update/{id}', [CommentaireController::class, 'update'])->name('commentaires.update');
Route::delete('commentaires/{id}', [CommentaireController::class, 'delete'])->name('commentaires.delete');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');




Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::put('/commentaires/{id}', [CommentaireController::class, 'update'])->name('commentaires.update');







// Route::post('/commentaires', [CommentaireController::class, 'store'])->name('commentaires.store');

















