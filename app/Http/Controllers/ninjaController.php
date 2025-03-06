<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dojo;
use App\Models\Ninja;
use Illuminate\Http\Request;

class ninjaController extends Controller
{
    function index () {
        $ninjas=Ninja::orderBy('created_at','desc')->paginate(10);
        // dd($ninjas);
        return view('ninjas.index',["ninjas"=>$ninjas
    ]);
    }
    function show(Ninja $ninja){
        $ninja->load('dojo');
        return view('ninjas.show',["ninja"=>$ninja]);
    }
    function create(){
        $dojos=Dojo::all();
        return view('ninjas.create',["dojos"=>$dojos]);
    }
    function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'required|string|min:20|max:1000',
            'skill'=>'required|integer|max:100|min:0',
            'dojo_id'=>'required|exists:dojos,id'
        ]);
        if(!$validated) {return response()->json(["message"=>"no valid inputs"]);}
       $ninja=Ninja::create($validated);
        return redirect()->route('ninjas.index')->with('success','new ninja created successfully!');
    }
    function destroy(Ninja $ninja){

        $ninja->delete();
        return redirect()->route('ninjas.index')->with('success',' ninja was deleted successfully!');
    }
}
