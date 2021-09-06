<?php
namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Http\Resources\AnswerResource;
use App\Http\Resources\Answers_QuestionResource;
use App\Http\Requests\Answers_QuestionRequest;
use Illuminate\Http\Request;
class AnswersController extends Controller
{
    public function index(Request $request){
        return Answer::all();
    }


    public function display(Request $request ,$id)
        {
           $question=Question::with('Answer')->where('id',$id)->get();
         return Answers_QuestionResource::collection($question);
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
