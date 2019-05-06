<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use DB;
use Input;
use Validator;

class RegisterController extends Controller
{
    public function showRegisterForm(){
        return view('frontView.home.register');
    }
    public function register(Request $request){
        $password=$request->get('password');
        $cpassword=$request->get('cpassword');
        if($password!=$cpassword){
            echo'not_match';
        }
        else if($request->get('email')){
            $email=$request->get('email');
            $data=DB::table("candidates")
                  ->where('email',$email)
                  ->count();
                  if($data>0){
                    echo'not_unique';
                  }
        else{
        $candidates = array();
        $candidates['first_name'] = $request->first_name;
        $candidates['last_name'] = $request->last_name;
        $candidates['address'] = $request->address;
        $candidates['phone'] = $request->phone;
        $candidates['birthDate'] = $request->birthDate;
        $candidates['email'] = $request->email;
        $candidates['password'] = $request->password;
        $candidates['cpassword'] = $request->cpassword;
        DB::table('candidates')->insert($candidates);
        echo 'unique';
    }
}
}
}