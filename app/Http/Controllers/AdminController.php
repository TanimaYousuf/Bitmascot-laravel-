<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate; 
use DB;

class AdminController extends Controller
{
    public function admin(){
    	return view('frontView.home.admin');
    }
    public function action(){
    	$candidates=Candidate::all();
    	return view('frontView.home.admin',['candidate' => $candidates]);
    }
    public function search(Request $request){
    	$search=$request->get('search');
    	$candidates=Candidate::query()
                   ->where('first_name', 'LIKE', "%{$search}%") 
                   ->orWhere('email', 'LIKE', "%{$search}%") 
                   ->get();
    	return view('frontView.home.admin',['candidate' => $candidates]);

    }
}
