<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Block\Element\BlockQuote;

/**
 * App\Models\Grade
 *
 * @property int $id
 * @property string $course_name
 * @property string|null $test_name
 * @property string $lowest_passing_grade Lowest grade to pass so average calculations can be applied
 * @property string|null $best_grade
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $passed_at Date that the grade was larger than or equal to the lowest passing grade
 * @method static \Illuminate\Database\Eloquent\Builder|Grade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade query()
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereBestGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereCourseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereLowestPassingGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade wherePassedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereTestName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grade whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

