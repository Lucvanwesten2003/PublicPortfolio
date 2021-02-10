<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){

        return view('allArticles', [
            'articles' => Article::latest()->get()
        ]);
    }

    public function show($id){
        return view('article', [
            'article' => Article::find($id)
        ]);
    }

    public function create(){
        return view('createArticle');
    }

    public function store(){
        $article= new Article();
        $article->title = \request('title');
        $article->excerpt = \request('excerpt');
        $article->body = \request('body');
        $article->save();

        return redirect('/articles');
    }

    public function edit(){
        //show a view to edit an existing resource
    }

    public function update(){
        //persist the edited resource
    }

    public function destroy(){
        // Delete the resource
    }
}
