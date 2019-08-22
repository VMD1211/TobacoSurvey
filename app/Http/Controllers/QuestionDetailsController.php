<?php

namespace App\Http\Controllers;

use App\QuestionDetails;
use Illuminate\Http\Request;

class QuestionDetailsController extends Controller
{
    //
    protected function index(){
        $question = QuestionDetails::all();
        return view('question.index', compact(['question']));
    }
    protected function update(){

    }
}
