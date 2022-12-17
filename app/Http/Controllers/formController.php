<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formModel;

class formController extends Controller
{
   public function getdata(){
    return view('form');
   }

   public function savedata(Request $req){
      $data=formModel::create([
         'name'=> $req->input('name'),
         'fname'=>$req->input('fname'),
         'mname' =>$req->input('mname'),
         'email'=>$req->input('email'),
         'age'=>$req->input('age'),
         'dob'=>$req->input('dob'),
         'department'=>$req->input('department'),
         'gender'=>$req->input('gender'),
         'address'=>$req->input('address'),
         // 'language'=>$req=implode(',', (array) $req->language)
         'language' => implode(',', (array) $req['language']),
      ]);
      return back()->with("message","Saved Successfully");
   }

   public function viewdata(){
      $data = formModel::all();
      return view('view',compact('data'));
   }
   public function editdata($id){
      $data = formModel::find($id);
      return view('update',compact('data'));
   }

   public function updatedata(Request $req){
      $id = $req->input('id');
      $data=formModel::find($id);
      $data->name =$req->input('name');
      $data->fname=$req->input('fname');
      $data-> mname =$req->input('mname');
      $data->email=$req->input('email');
      $data->age=$req->input('age');
      $data->dob=$req->input('dob');
      $data->department=$req->input('department');
      $data->gender=$req->input('gender');
      $data->address=$req->input('address');
      $data->language=$req->input('language');
      $data->save();
      //return back();
      return redirect('viewData')->with('success','Data updated successfully');
   }
   public function deletedata(Request $req){
      $id = $req->input('id');
      formModel::where('id',$id)->update(['status'=>0]);
        return back();
      
   }
   
}