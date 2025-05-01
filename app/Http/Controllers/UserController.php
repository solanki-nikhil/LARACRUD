<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $users = DB::table('users')->Paginate(10);
        return view('user', ['data' => $users]);
    }
    
    public function create(){
        return view('usercreate');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            // 'password'=>'required|alpha_num|min:6',
            'contact'=>'required',
            'age'=>'required|numeric|min:18',
            'city'=>'required',
        ]);
        return $request->all();
        // $users = DB::table('users')->insert([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'contact'=>$request->contact,
        //     'age'=>$request->age,
        //     'city'=>$request->city
        // ]);
        // if ($users) {
        //     return redirect()->route('user'); 
        // }else{
        //     echo "Data Not Store!";
        // }
    }

    public function show(Request $request,$id){
        $users = DB::table('users')->where('id',$id)->get();
        return view('userview',['data'=> $users]);
    }

    
    public function edit(Request $request,$id){
        $users = DB::table('users')->where('id',$id)->first();
        return view('useredit',['data'=> $users]);
    }

    public function update(Request $request,$id){
        $users = DB::table('users')
        ->where('id',$id)
        ->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'age'=>$request->age,
            'city'=>$request->city
        ]);

        if ($users) {
           return redirect()->route('user');
        } else {
           echo "Data Not Updated.";
        }
        
    }

    public function delete($id){
        $user = DB::table('users')->where('id',$id)->delete();
         if ($user) {
            return redirect()->route('user');
         }
    }

    public function deleteAllUser(){
        $user = DB::table('users')->truncate();
        if ($user) {
            return redirect()->route('user');
        }
    }

    // public function deleteAllUser() {
    //     DB::table('users')->delete();
    //     return redirect()->back()->with('success', 'All users deleted.');
    // }

}
