<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faq;

class FaqController extends Controller
{
    public function index(){
        return view('faq', [
            'posts' => Faq::all()
        ]);
    }

    public function show($id){
        return view('singleFaq', [
            'faq' => Faq::find($id)
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

    public function edit($id){
        $faq = Faq::find($id);
        return view('faqEditor', compact('faq'));
    }

    public function update($id){
        $faq = Faq::find($id);

        $faq->question = \request('question');
        $faq->answer = \request('answer');
        $faq->save();

        return redirect('/faq');
    }

    public function destroy($id){
        $faq = Faq::find($id);
        $faq->delete();

        return redirect('/faq');
    }
}
