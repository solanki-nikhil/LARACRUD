<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actor = DB::table('actors')->paginate(10);
        return view('actor',['data'=>$actor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actorcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $actor = DB::table('actors')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'age'=>$request->age,
            'city'=>$request->city
        ]);
        if ($actor) {
            return redirect()->route('actor');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor,$id)
    {
        $actor  = DB::table('actors')->where('id',$id)->get();
        return view('actorview',['data'=>$actor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor,$id)
    {
        $actor = DB::table('actors')->where('id',$id)->first();
        return view('actoredit',['data'=>$actor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actor $actor,$id)
    {
        $actor = DB::table('actors')->where('id',$id)
        ->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'age'=>$request->age,
            'city'=>$request->city
        ]);
        if ($actor) {
            return redirect()->route('actor');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor,$id)
    {
        $actor = DB:: table('actors')->where('id',$id)->delete();
        if ($actor) {
            return redirect()->route('actor');
        }
    }

    public function deleteallactor(){
        $actor = DB::table('actors')->delete();
        if ($actor) {
            return redirect()->route('actor');
        }
    }
}
