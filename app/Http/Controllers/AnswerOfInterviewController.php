<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnswerOfInterviewer;
class AnswerOfInterviewController extends Controller
{
    //
    protected function store(Request $request){
        $answer = $this->validate(request(), [
            'ans_name'=>'required',
            'ans_content'=>'required',
            'int_id'=> 'required|numeric',
        ]);

        AnswerOfInterviewer::create($answer);
    }
}
