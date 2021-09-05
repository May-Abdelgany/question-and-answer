<?php
namespace App\Http\Controllers;
use App\Models\Answer;

use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function index(){
        return Answer::all();
    }
    public function store(Request $request)
    {

        $answer=new Answer();
        $answer->id=$request->id;
        $answer->question_id=$request->question_id;
        $answer->answer=$request->answer;
        $answer->save();
       // return new AnswerResources($answer);
        return $answer;
    }

    public function delete(Answer $answer){
        $answer=$answer->delete();
        return Answer::all();
    }

}
