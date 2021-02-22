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

    public function show(Article $article){
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create(){
        return view('articles.create');
    }


//    public function store(){
//        Article::create($this->validateArticle());
//
//        return redirect('/articles');
//    }

    public function store(Request $request){
        Article::create($this->validateArticle($request));

        return redirect('/articles');
    }

    public function edit(Article $article){
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, Request $request){
        $article->update($this->validateArticle($request));

        return redirect($article->path());
    }

//    public function update(Article $article){
//        $article->update($this->validateArticle());
//
//        return redirect($article->path());
//    }

    public function destroy($id){
        $article = Article::find($id);

        $article->delete();

        return redirect('/articles');
    }

    public function validateArticle(Request $request)
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
