<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use DB;
use Input;
use Validator;

class LoginController extends Controller
{
     public function showLoginForm(){
        return view('frontView.home.login');
    }
     public function login(Request $request){
     	if($request->get('email')){
            $email=$request->get('email');
            $password=$request->get('password');
            $data=DB::table("candidates")
                  ->where('email',$email)
                  ->where('password',$password)
                  ->count();
                  if($data>0){
                  $first_name=DB::table("candidates")
                  ->select('first_name')
                  ->where('email',$email)
                  ->get();
                  session()->put('email',$email);
                  $email=session()->get('email');
                  session()->put('first_name',$first_name);
                  echo $email;
                  }
                  else{
                  	echo'invalid';
                  }
     }
 }
}