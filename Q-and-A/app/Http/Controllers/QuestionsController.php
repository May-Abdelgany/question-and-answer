<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Requests\Answers_QuestionRequest;
use App\Http\Resources\Answers_QuestionResource;
use App\Http\Resources\QuestionResource;
class QuestionsController extends Controller
{
    public function index(){
        return  Question::all();
    }

    public function display(/*Answers_Question*/Request $request ,$id)
        {
            $question = Answer::with('Question')->where('question_id',$id)->get();
            //return new Answer_QuestionResource($question);
           
            return $question;
        }
    public function store(Request $request)
    {
        $question=new Question();
        $question->id=$request->id;
        $question->title=$request->title;
        $question->question=$request->question;
        $question->tag=$request->tag;
        $question->save();
        return new QuestionResource($question);
    }
    
    public function delete(Question $question){
        $question=$question->delete();
        return question::all();
    }
}
