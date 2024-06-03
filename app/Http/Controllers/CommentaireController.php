<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Article;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function store(Request $request, $article_id)
    {
        $article = Article::findOrFail($article_id);
        $commentaire = new Commentaire();
        $commentaire->nom_complet_auteur = $request->input('nom_complet_auteur');
        $commentaire->contenu = $request->input('contenu');
        $article->commentaires()->save($commentaire);
        return redirect()->back()->with('success', 'Commentaire ajouté avec succès.');
    }

    public function edit($id)
    {
        $commentaire = Commentaire::findOrFail($id);
        return view('commentaires.edit', compact('commentaire'));
    }

    public function update(Request $request, $id)
    {
        $commentaire = Commentaire::findOrFail($id);
        $commentaire->nom_complet_auteur = $request->input('nom_complet_auteur');
        $commentaire->contenu = $request->input('contenu');
        $commentaire->save();
        return redirect()->route('articles.read', $commentaire->article_id)->with('success', 'Commentaire mis à jour avec succès.');
        
    }

    public function delete($id)
    {
        $commentaire = Commentaire::findOrFail($id);
        $article_id = $commentaire->article_id;
        $commentaire->delete();
        return redirect()->route('articles.read', $article_id)->with('success', 'Commentaire supprimé avec succès.');
    }


    

}

    









// namespace App\Http\Controllers;

// use App\Models\Commentaire;
// use App\Models\Article;
// use Illuminate\Http\Request;

// class CommentaireController extends Controller
// {
//     public function store(Request $request, $article_id)
//     {
//         $article = Article::findOrFail($article_id);
//         $commentaire = new Commentaire();
//         $commentaire->nom_complet_auteur = $request->input('nom_complet_auteur');
//         $commentaire->contenu = $request->input('contenu');
//         $article->commentaires()->save($commentaire);

//         return redirect()->back()->with('success', 'Commentaire ajouté avec succès.');
//     }
// }



