<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Grade;

class DashboardController extends Controller
{

    public function show(){
        return view('grades', [
            'grades' => Grade::all(),
            'totalEC' => $this->calculate()
        ]);
    }

    public function calculate(){
        $totalEC = 0;
        $goodgrades = Grade::where('best_grade', '>=', 5.5)->get();
        foreach($goodgrades as $goodgrade){
            $totalEC += $goodgrade->EC;
        }
        return $totalEC;
    }
}
