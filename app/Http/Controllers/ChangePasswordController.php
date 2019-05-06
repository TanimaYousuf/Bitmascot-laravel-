<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use DB;
use Input;
use Validator;

class ChangePasswordController extends Controller
{
    public function showForm(){
      return view('frontView.home.changePassword');
    }
    public function changePassword(Request $request){
      $new_password=$request->get('new_password');
        $con_password=$request->get('con_password');
        if($new_password!=$con_password){
            echo'not_match';
        }
        else if($request->get('old_password')){
            $password=$request->get('old_password');
            $email=session()->get('email');
            $data=DB::table("candidates")
                  ->where('password',$password)
                  ->where('email',$email)
                  ->count();
                  if($data>0){
                    DB::table("candidates")
                    ->where('email', $email) 
                    ->limit(1)
                    ->update(['password' => $con_password, 'cpassword' => $con_password]);
                    echo'valid';
                  }
                  else{
                    echo'invalid';
                  }
    }
}
}