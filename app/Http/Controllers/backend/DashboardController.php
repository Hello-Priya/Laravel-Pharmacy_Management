<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Extra;

class DashboardController extends Controller
{
    public function dashboard(){

        return view('backend.master');
    }

    public function home(){

        return view('backend.pages.content');
    }

    public function list(){
       
        return view('backend.pages.category.categorylist');
    }

    public function form(){

        return view('backend.pages.category.create');
    }
    
    public function nipa(){

        return view('backend.pages.category.napa');
    
    }

    public function skip(Request $request){
        //dd($request->all());
        Extra::create([

            'Name' => $request->Name,
            'Password' => $request->Password,
            'Mobile_Number' => $request->Mobile_Number,
        ]);
        return redirect()->back();

    }
    
    
      

    

}