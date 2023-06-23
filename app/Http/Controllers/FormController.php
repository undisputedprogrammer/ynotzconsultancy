<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function survey(Request $request){
        // $i=0;
        // $sm=[];

        // if($request['facebook']!=null){
        //     $sm[$i]=$request['facebook'];
        //     $i++;
        // }

        // if($request['instagram']!=null){
        //     $sm[$i]=$request['instagram'];
        //     $i++;
        // }

        // if($request['linkedin']!=null){
        //     $sm[$i]=$request['linkedin'];
        //     $i++;
        // }

        // if($request['twitter']!=null){
        //     $sm[$i]=$request['twitter'];
        //     $i++;
        // }

        // if($request['youtube']!=null){
        //     $sm[$i]=$request['youtube'];
        //     $i++;
        // }

        // if($request['whatsapp']!=null){
        //     $sm[$i]=$request['whatapp'];
        //     $i++;
        // }

        // $request->validate([
        //     'q10'=>['required'],
        // ]);

        if($request['q10']==null){
            return back()->withErrors(['q10'=>'Check at least one box'])->onlyInput('q10');
        }


            $sm=$request['q10'];
            $jsm=json_encode($sm);
        if($request['name']!=null){
            $name = $request['name'];
        }
        else{
            $name = "Not Specified";
        }



        $survey=Survey::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'rvId'=>$request['rv'],
            'q1'=>$request['q1'],
            'q2'=>$request['q2'],
            'q3'=>$request['q3'],
            'q4'=>$request['q4'],
            'q5'=>$request['q5'],
            'q6'=>$request['q6'],
            'q7'=>$request['q7'],
            'q8'=>$request['q8'],
            'q9'=>$request['q9'],
            'q10'=>$jsm,
            'q11'=>$request['q11'],
            'state'=>$request['state'],
            'age_group'=>$request['age'],
            'gender'=>$request['gender']
        ]);

        return redirect('/complete/survey');
    }


    public function complete(){
        return view('survey-completed');
    }
}
