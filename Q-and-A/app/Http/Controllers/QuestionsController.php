<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
class QuestionsController extends Controller
{
    public function index(){
        return  Question::all();
    }
    public function store(Request $request)
    {
        $question=new Question();
        $question->id=$request->id;
        $question->title=$request->title;
        $question->question=$request->question;
        $question->tag=$request->tag;
        $question->save();
        return $question;
    }

    public function delete(Question $question){
        $question=$question->delete();
        return question::all();
    }
}
