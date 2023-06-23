<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(){
        return view('rv-signup');
    }

    public function create(Request $request){
        if($request['password']!=$request['confirm_password']){
            return back()->withInput()->withErrors(['confirm_password'=>"Passwords does not match"]);
        }

        $password=Hash::make($request['password']);

        $volunteer=Volunteer::create([
            'name'=>$request['name'],
            'college'=>$request['college'],
            'course'=>$request['course'],
            'location'=>$request['location'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'password'=>$password,
        ]);

        return redirect('/rv/login');

    }

    public function index(){

        if (session()->exists('rv_id')) {
            $id = session('rv_id');
            $rv = Volunteer::find($id);
            $responses = Survey::where('rvId',$id)->get();
            return view('rv-dashboard', compact('rv','responses'));
        }
        else{
            return redirect('/rv/login');
        }
    }

    public function login()
    {
       return view('rv-login');
    }


    public function authenticate(Request $request){



        $v = Volunteer::where('email',$request['email'])->get()->first();

            if($v!=null) {
                $user = $v;
                if(Hash::check($request['password'], $user->password)) {
                    session(['rv_id' => $user['id']]);
                    return redirect('/rv/dashboard');
                }
            }
            else{
                return back()->withInput()->withErrors(['password'=>"Invalid Credentials"]);
            }

        if($v==null){
            return back()->withInput()->withErrors(['password'=>"Invalid Credentials"]);
        }

        return redirect('/rv/login');

        // dd($request);
    }


    public function sessions(Request $request){
        $data = $request->session()->all();
        dd($data);
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect('/rv/login');
    }
}
