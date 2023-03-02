<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Answer;
use App\Models\Answer as ModelsAnswer;

class QuestionModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'question_id';

    public function answer()
    {
      return $this->hasOne('App\Models\Answer');
    }
}
