<?php
namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;

use Illuminate\Http\Request;
class AnswersController extends Controller
{
    public function index(Request $request){
        return Answer::all();
    }
    

    public function store(Answers_QuestionRequest $request,Question $question)
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
