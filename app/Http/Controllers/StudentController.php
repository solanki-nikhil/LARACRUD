<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')
        ->join('cities','students.city','=','cities.id')
        ->select('students.*','cities.city_name')->Paginate(10);
        // return view('student',['data'=>$students]);
        return view('student',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('studentcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = DB::table('students')
        ->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'enroll'=>$request->enroll,
            'age'=>$request->age,
            'city'=>$request->city
        ]);
        if ($student) {
           return redirect()->route('student');
        }else{
            echo "Data Not Added.";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student,$id)
    {
        $student = DB::table('students')->where('id',$id)->get();
        return view('studentview',['data'=> $student]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $student = DB::table('students')->where('id',$id)->get();
        $student = DB::table('students')->where('id',$id)->first();
        return view('studentedit',['data'=> $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student,$id)
    {
        $student = DB::table('students')
        ->where('id',$id)
        ->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'enroll'=>$request->enroll,
            'age'=>$request->age,
            'city'=>$request->city
        ]);
        if ($student) {
            return redirect()->route('student');
         }else{
             echo "Data Not Added.";
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = DB::table('students')->where('id',$id)->delete();
        if ($student) {
            return redirect()->route('student');
        }
    }
    
    public function deletealluser(){
        $student = DB::table('students')->delete();
        if ($student) {
        return  redirect()->route('student');
        }
    }
}
