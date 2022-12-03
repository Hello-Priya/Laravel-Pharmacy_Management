<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Table;
use Illuminate\Support\Facades\Validator;



class CategoryController extends Controller
{
    public function store(Request $request){
        //dd($request->all());

        
        Category::create([

            'category_name' => $request->category_name,
            'details' => $request->details,
            'phone-number' => $request->phone-number
        ]);
        return redirect()->back();

    }

    public function table(){
        return view('backend.pages.category.table');
    }
    public function form(){
        return view('backend.pages.category.form');
    }
    public function form_store(Request $request){
        //dd($request->all());
        $validator=validator::make($request->all(),[

            'Name' => 'required|max:255',
            'Details' => 'required',
            'Address' => 'required',
            'Mobile_Number' => 'required',


        ]);
        if($validator->fails()){
            return redirect(url('create_form'))->withErrors($validator)->withInput();
        }
        
        Table::create([
            'Name' => $request->Name,
            'Details' => $request->Details,
            'Address' => $request->Address,
            'Mobile_Number' => $request->Mobile_Number,

        ]);
        return redirect(url('customer-show'));

        
    

    }
    public function show(){
        $customers = Table::all();
        return view('backend.pages.category.customerList',compact('customers'));
    }

    public function delete($id){
        Table::find($id)->delete();
        return back();
        return back()->with('Success','Created successfully');
}

public function Edit_form($id){
    $customerEdit=Table::find($id);
    return view('backend.pages.category.customerEdit',compact('customerEdit'));
}

 public function update_form(Request $request, $id){
    $customerUpdate=Table::find($id);
    $customerUpdate->update([
        'Name' => $request->Name,
        'Details' => $request->Details,
        'Address' => $request->Address,
        'Mobile_Number' => $request->Mobile_Number,
    ]);
    return redirect()->route('customer.show');
 }
}







