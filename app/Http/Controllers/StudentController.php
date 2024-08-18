<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   public function View_Student() {
      $students = DB::table('students')->get();
      
      
      return view('student.index', compact('students'));
  }
  
       
  
  
     public function Store_Student(Request $request){
        $validateData = $request->validate([
           'name' => 'required|unique:students',
         ]);
    
        $data = new Student();
    
    
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone_no;
        $data->age = $request->age;
        $data->address = $request->address;
        $data->save();
    
    
      
        return redirect()->route('student.view');
     }
  
   
  
  
     public function Update_Student(Request $request, $id){
        $data = Student::find($id);

       
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone_no;
        $data->age = $request->age;
        $data->address = $request->address;
        $data->save();
    
    
       
        return redirect()->route('student.view');
     }
  
     public function Delete_Student($id){
        $delete_data = Student::find($id);
    
        $delete_data->delete();
    
    
        return redirect()->route('student.view');
     } 
  

}
