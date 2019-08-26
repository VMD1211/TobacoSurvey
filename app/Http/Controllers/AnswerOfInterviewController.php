<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerOfInterviewer;
class AnswerOfInterviewController extends Controller
{
    //
    protected function index(){
        $answer = AnswerOfInterviewer::all();
        return view('Interviewer.index',compact('answer'));
    }

    protected function store(Request $request){
        $answer = new AnswerOfInterviewer();

        $answer->ans_name = request('ans_name');
        $answer->ans_content = request('ans_content');
        $answer->int_id = request('int_id');

        $answer->save();
    }
}
