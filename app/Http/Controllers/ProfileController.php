<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use DB;
use Input;
use Validator;
class ProfileController extends Controller
{
    public function showProfile(){
        if(session()->get('email')){
        $email=session()->get('email');
        $candidates=DB::table('candidates')
                   ->where('email', $email)->get();
        return view('frontView.home.profile',['candidates' => $candidates]);
    }
    else{
        return view('frontView.home.login');
    }
    }
}