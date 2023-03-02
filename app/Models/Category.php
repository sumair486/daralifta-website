<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = ['category_id','id'];






    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function answer()
    {
        return $this->hasMany(Answer::class,'answer_id');
    }

}
