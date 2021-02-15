<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        return view('articles.index', [
            'articles' => Article::latest()->get()
        ]);
    }

    public function show($id){
        return view('articles.show', [
            'article' => Article::find($id)
        ]);
    }

    public function create(){
        return view('articles.create');
    }

    public function store(){
        $article= new Article();
        $article->title = \request('title');
        $article->excerpt = \request('excerpt');
        $article->body = \request('body');
        $article->save();

        return redirect('/articles');
    }

    public function edit($id){
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id){
        $article = Article::find($id);

        $article->title = \request('title');
        $article->excerpt = \request('excerpt');
        $article->body = \request('body');
        $article->save();

        return redirect('/articles/' . $article->id);
    }

    public function destroy($id){
        $article = Article::find($id);

        $article->delete();

        return redirect('/articles');
    }
}
