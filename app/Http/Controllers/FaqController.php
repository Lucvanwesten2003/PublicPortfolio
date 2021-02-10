<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faq;

class FaqController extends Controller
{
    public function index(){
        //render a list of resource
    }

    public function show(){
        // show single resource
        return view('faq', [
            'posts' => Faq::all()
        ]);
    }

    public function create(){
        return view('createFaq');
    }

    public function store(){
        $faq = new Faq();
        $faq->question = \request('question');
        $faq->answer = \request('answer');
        $faq->save();

        return redirect('/faq');

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
