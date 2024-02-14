<?php

namespace App\Http\Controllers;
use App\Models\Personal_detail;

use Illuminate\Http\Request;

class PersonalDetailController extends Controller
{

    public function index(){
        $personal_details = Personal_detail::all();
        return view('backend.personal_detail.index', compact('personal_details'));
    }


    public function create(){
        return view('backend.personal_detail.create');
    }

    public function store(Request $request){
        $personal_details = Personal_detail::create($request->all());
        if($personal_details){
            return redirect()->route('details')->with('success', 'Your details have been created successfully!');
        }else{
            return 'Unable to store your details';
        }
        
    }

    public function edit($id){
        $personal_detail = Personal_detail::find($id);
        return view('backend.personal_detail.edit', compact('personal_detail'));
    }

    public function update(Request $request, $id){
        $personal_detail = Personal_detail::find($id);
        $personal_detail->update($request->all());
        return redirect()->route('details')->with('success', 'Your details have been updated successfully!');
    }

    public function destroy($id){
        $personal_detail = Personal_detail::find($id);
        $personal_detail->delete();
        return redirect()->route('details')->with('success', 'Your details have been deleted successfully!');
    }

}
