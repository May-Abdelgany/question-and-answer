<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable =[
        "answer"
    ];
    public function Question(){

        return $this->belongsTo(Question::class,'question_id');
    }
}
