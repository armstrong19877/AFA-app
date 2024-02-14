<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interest;

class InterestController extends Controller
{
    public function index(){
        $hobs = Interest::all();
        return view('backend.interest.index', compact('hobs'));
    }


    public function create(){
        return view('backend.interest.create');
    }

    public function store(Request $request){
        $hob = Interest::create($request->all());
        if($hob){
            return redirect()->route('interests')->with('success', 'Your details have been created successfully!');
        }else{
            return 'Unable to store your details';
        }
        
    }

    public function edit($id){
        $hob = Interest::find($id);
        return view('backend.interest.edit', compact('hob'));
    }

    public function update(Request $request, $id){
        $hob = Interest::find($id);
        $hob->update($request->all());
        return redirect()->route('interests')->with('success', 'Your details have been updated successfully!');
    }

    public function destroy($id){
        $hob = Interest::find($id);
        $hob->delete();
        return redirect()->route('interests')->with('success', 'Your details have been deleted successfully!');
    }
}
