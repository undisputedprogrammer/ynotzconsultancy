<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function service($id){
        return view('service',[
            'id'=>$id,
        ]);
    }

    public function survey(Request $request){
        // dd($request->rv);
        return view('survey',[
            'rv'=>$request->rv,
        ]);
    }
}
