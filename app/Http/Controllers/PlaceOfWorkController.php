<?php

namespace App\Http\Controllers;
use App\Models\Place_of_work;
use Illuminate\Http\Request;

class PlaceOfWorkController extends Controller
{
    public function index(){
        $works = Place_of_work::all();
        return view('backend.place_of_work.index', compact('works'));
    }


    public function create(){
        return view('backend.place_of_work.create');
    }

    public function store(Request $request){
        $works = Place_of_work::create($request->all());
        if($works){
            return redirect()->route('place_of_work')->with('success', 'Your details have been created successfully!');
        }else{
            return 'Unable to store your details';
        }
        
    }

    public function edit($id){
        $work = Place_of_work::find($id);
        return view('backend.place_of_work.edit', compact('work'));
    }

    public function update(Request $request, $id){
        $work = Place_of_work::find($id);
        $work->update($request->all());
        return redirect()->route('place_of_work')->with('success', 'Your details have been updated successfully!');
    }

    public function destroy($id){
        $work = Place_of_work::find($id);
        $work->delete();
        return redirect()->route('place_of_work')->with('success', 'Your details have been deleted successfully!');
    }
}
