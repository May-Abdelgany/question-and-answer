<?php
namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Http\Controllers\AnswerResource;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function index(Request $request,Question $question){
        return Answer::all();
    }
    public function store(Request $request,Question $question)
    {

       $answer=new Answer();
        $answer->id=$request->id;
        $answer->question_id=$request->question_id;
        $answer->answer=$request->answer;
        $answer->save();
        return $answer;
    }

    public function delete(Answer $answer){
        $answer=$answer->delete();
        return Answer::all();
    }

}
