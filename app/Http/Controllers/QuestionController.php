<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    protected function index(){
        $question = Question::all()->toArray();
        return $question;
    }
    protected function update(){

    }
}
