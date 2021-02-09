<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ProfessionController extends Controller
{
    public function show(){
        return view('profession', [
            'articles' => Article::all()
        ]);
    }
}
