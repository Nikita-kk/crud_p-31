<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;


class FormController extends Controller
{
  public function form(){
    return view('form');
  }
  public function store(Request $request){
     $validated=$request->validate([
        'name'=>'required|regex:/^[a-zA-Z]+$/u|',
     ]);

    $data=new form();
    $data->name=$request->name;
    $data->email=$request->email;

    $data->save();
    return redirect()->route('table')->with('msg','data submitted');
  }

  public function table(){
    $data=form::all();
    return view('table',compact('data'));
  }
 public function edit($id){
    $data=form::find($id);
    return view('edit',compact('data'));

 }

 public function update(Request $request,$id){

    $validated=$request->validate([
        'name'=>'required',
     ]);

    $data=form::find($id);
    $data->name=$request->name;
    $data->email=$request->email;
    $data->save();
    return redirect()->route('table')->with('msg','data updated');
  }
  public function delete($id){
    $data=form::find($id);
    $data->delete();
    return redirect()->route('table')->with('msg','data deleted');

  }
}

