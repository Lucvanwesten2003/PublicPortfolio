<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Block\Element\BlockQuote;

class Grade extends Model
{
    use HasFactory;

    public function addResult($number)
    {
        if ($number > $this->best_grade){
            $this->best_grade = $number;
        }

        if($this->best_grade >= 5.5){
            $this->passed_at = now();
        }else{
            $this->passed_at = null;
        }


        $this->save();
    }

}

