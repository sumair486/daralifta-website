<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $guard=[];
    protected $primaryKey="answer_id";
    protected $fillable = ['category_id','answer_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
