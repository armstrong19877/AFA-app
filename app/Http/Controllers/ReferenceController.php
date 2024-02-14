<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reference;

class ReferenceController extends Controller
{
    public function index(){
        $refs = Reference::all();
        return view('backend.reference.index', compact('refs'));
    }


    public function create(){
        return view('backend.reference.create');
    }

    public function store(Request $request){
        $ref = Reference::create($request->all());
        if($ref){
            return redirect()->route('references')->with('success', 'Your details have been created successfully!');
        }else{
            return 'Unable to store your details';
        }
        
    }

    public function edit($id){
        $ref = Reference::find($id);
        return view('backend.reference.edit', compact('ref'));
    }

    public function update(Request $request, $id){
        $ref = Reference::find($id);
        $ref->update($request->all());
        return redirect()->route('references')->with('success', 'Your details have been updated successfully!');
    }

    public function destroy($id){
        $ref = Reference::find($id);
        $ref->delete();
        return redirect()->route('references')->with('success', 'Your details have been deleted successfully!');
    }
}
