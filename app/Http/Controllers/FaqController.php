<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use App\Models\Faq;

class FaqController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['show', 'index']);
    }
    
    public function index(){
        return view('faq', [
            'posts' => Faq::all()
        ]);
    }

    public function show(Article $article){
        return view('singleFaq', [
            'faq' => $article
        ]);
    }

    public function create(){
        return view('createFaq');
    }

    public function store(Request $request){
        Faq::create($this->validateFaq($request));

        return redirect('/faq');

    }

    public function edit(Faq $faq){
        return view('faqEditor', compact('faq'));
    }

    public function update(Faq $faq, Request $request){
        $faq->update($this->validateFaq($request));

        return redirect('/faq');
    }

    public function destroy($id){
        $faq = Faq::find($id);
        $faq->delete();

        return redirect('/faq');
    }


    public function validateFaq(Request $request)
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }
}
