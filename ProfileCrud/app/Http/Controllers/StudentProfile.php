<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use File;
class StudentProfile extends Controller
{
    public function inputPage(){
        return view("StudentInputView");
    }

    public function saveStudentInfo(Request $req){
        $student=New Student();
        $student->name=$req->input('name');
        $student->email=$req->input('email');
        $student->phone=$req->input('phone');
        $student->address=$req->input('address');
        if($req->hasfile('image')){
            $file=$req->file('image');
            $extension=$file->getClientOriginalName();
            $filename=time().'.'.$extension;
            //$file= move('public/uploads/student',$filename);
            $file-> move(public_path('public/Image'), $filename);
            $student->profileImage=$filename;
            //$name=$req->file('image')->getClintOriginalName();
            //$file=storeAs('uploads/student/',$name);
        } //$student->profileImage=$name;
            
        $student->save();
        //return redirect('getinputPage');
        return redirect('getData'); 
        //dd($req->file('image')->getClientOriginalName());
    
       
}

public function getDataInfo(){
    $data=Student::all();
    return view('StudentGetData',compact('data'));
}

public function DataEdit($id){
    $data=Student::find($id);
    return view('StudentEditPage',compact('data'));
}

public function Dataupdate(Request $req){
    $student=student::find($req->id);
    $student->name=$req->name;
    $student->email=$req->email;
    $student->phone=$req->phone;
    $student->address=$req->address;
    if($req->hasfile('image')){

        $destination='public/Image/'.$student->profileImage;
      if(File::exists($destination)){
        File::delete($destination);
         }
        $file=$req->file('image');
        $extension=$file->getClientOriginalName();
        $filename=time().'.'.$extension;
        //$file= move('public/uploads/student',$filename);
        $file-> move(public_path('public/Image'), $filename);
        $student->profileImage=$filename;
        //$name=$req->file('image')->getClintOriginalName();
        //$file=storeAs('uploads/student/',$name);
    }
    $student->update();
    return redirect('getData'); 

}



public function studelete($id){
     $data=Student::find($id);

    $destination='public/Image/'.$data->profileImage;
    if(File::exists($destination)){
        File::delete($destination);
    }
    $data->delete();
    return redirect('getData');
    //return $id;
}

}
