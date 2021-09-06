<?php
namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Http\Resources\AnswerResource;
use Illuminate\Http\Request;
class AnswersController extends Controller
{
    public function index(Request $request){
        return Answer::all();
    }


    public function display(/*Answers_Question*/Request $request ,$id)
        {
            $question = Answer::with('Question')->where('question_id',$id)->get();
            //return new Answer_QuestionResource($question);

            return $question;
        }

    public function store(Request $request,Question $question)
    {

       $answer=new Answer();
        $answer->id=$request->id;
        $answer->question_id=$request->question_id;
        $answer->answer=$request->answer;
        $answer->save();
        return new AnswerResource($answer);
    }

    public function delete(Answer $answer){
        $answer=$answer->delete();
        return Answer::all();
    }

}
