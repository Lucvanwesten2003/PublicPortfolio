<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id){
        return view('article', [
            'article' => Article::all()
        ]);
    }
}
