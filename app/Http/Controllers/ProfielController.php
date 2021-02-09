<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;


class ProfielController extends Controller
{
    public function show(){
        return view('profiel',[
            'articles' => Article::take(3)->latest()->get()
        ]);
    }
}
