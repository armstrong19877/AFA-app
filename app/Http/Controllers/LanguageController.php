<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
    public function index(){
        $langs = Language::all();
        return view('backend.language.index', compact('langs'));
    }


    public function create(){
        return view('backend.language.create');
    }

    public function store(Request $request){
        $lang = Language::create($request->all());
        if($lang){
            return redirect()->route('languages')->with('success', 'Your details have been created successfully!');
        }else{
            return 'Unable to store your details';
        }
        
    }

    public function edit($id){
        $lang = Language::find($id);
        return view('backend.language.edit', compact('lang'));
    }

    public function update(Request $request, $id){
        $lang = Language::find($id);
        $lang->update($request->all());
        return redirect()->route('languages')->with('success', 'Your details have been updated successfully!');
    }

    public function destroy($id){
        $ref = Language::find($id);
        $ref->delete();
        return redirect()->route('languages')->with('success', 'Your details have been deleted successfully!');
    }
}
