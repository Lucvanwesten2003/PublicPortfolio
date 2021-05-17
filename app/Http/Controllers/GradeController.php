<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['show', 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        return view('grades.index', [
            'grades' => Grade::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));

        return redirect('/grades');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Grade $grade
     */
    public function show(Grade $grade)
    {
        return view('grades.show', compact('grade'));
    }


    public function edit(Grade $grade)
    {
        return view('grades.edit', compact('grade'));
    }


    public function update(Request $request, Grade $grade){
        $grade->update($this->validateGrade($request));

        return redirect($grade->path());
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect('/grades');
    }

    public function validateGrade(Request $request)
    {
        return $request->validate([
            'blok' => 'required',
            'course_name' => 'required',
            'EC' => 'required',
            'best_grade' => 'required|numeric|between:0,10'
        ]);
    }
}
