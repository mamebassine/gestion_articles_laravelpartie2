<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
   public function index()
    {
        $articles = Article::all();  // Récupérez tous les articles depuis la base de données
        return view('articles.list', compact('articles')); 
    }
    public function create()
    {
        // $articles = Article::all();
        return view('articles.create');

        
    } 
public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'date_creation' => 'required|date',
            'type' => 'required',
            'image' => 'nullable|url',
        ]);
        Article::create($request->all());

        return redirect()->route('articles.list')->with('success', 'Article créé avec succès!');
    
}

public function destroy(string $id) // pour suppression
    {
        $article = Article::findOrFail($id);

        // Supprimer l'image associée à l'article
        Storage::disk('public')->delete($article->image);

        $article->delete();
        return redirect()->route('articles.list')->with('success', 'Article supprimé.');
    }


    public function read(string $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.read', compact('article')// Utilisez 'articles.read' au lieu de 'articles.index'

    );
    }


    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'date_creation' => 'required|date',
            'type' => 'required',
            'image' => 'nullable|url',
        ]);

        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect()->route('articles.list')->with('success', 'Article mis à jour avec succès!');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        $commentaires = $article->commentaires;
        return view('articles.show', compact('article', 'commentaires'));
    }
    

    
}



