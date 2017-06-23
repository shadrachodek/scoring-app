<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{



    public function add_student(){

    	return view('add_student');
    }

    public function submit_student(Request $request){

    }
}
