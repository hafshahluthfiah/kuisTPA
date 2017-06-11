<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(){		//tampilan soal
    // return "coba";
    return view("welcome");
    }//

    public function score(){

    }
}
