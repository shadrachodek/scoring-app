<?php

namespace App\Http\Controllers;

use App\Score;
use App\Subject;
use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{



    public function add_student(){

    	return view('add_student');
    }

    public function generate(){

        return view('generate');
    }

    public function view_scores(){
        $scores = Score::all();

        return view('scores', compact('scores', $scores));
    }

    public function submit_student(Request $request){


        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        return redirect()->route('all_user')->with("success", "Add Student Successful");

    }

    public function generate_submit(Request $request){

        $subjects = Subject::all();
        $getSubjectId = "";

        if ($subjects->isEmpty()){

            $subject = Subject::create([
                'subject' => $request['subject'],
            ]);
            $getSubjectId =  $subject->id;


        } else {
                foreach ($subjects as $subject) {
                    if ($subject->name == $request['subject']) {
                        $getSubjectId = $subject->id;
                    }
                }

        }





        $medy = [];

        foreach (range(1, 100) as $number) {
            array_push($medy, $number);
        }


        $users = User::all();
        foreach ($users as $user){
            shuffle ($medy);
            Score::create([
                'user_id' => $user->id,
                'subject_id' => (int) $getSubjectId,
                'score' => array_pop($medy)
            ]);

        }

        return "Allright";




        return redirect()->route('scores')->with("success", "Add Student Successful");

    }
}
