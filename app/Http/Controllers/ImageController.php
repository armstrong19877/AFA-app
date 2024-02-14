<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index(){
        $images = Image::all();
        return view('backend.image.index', compact('images'));
    }

    public function create(){
        return view('backend.image.create');
    }

    public function store(Request $request){

        //for image
     if ($image = $request->file('image')) {
        $destinationPath = 'backend/photos';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $request['image'] = "$profileImage";
    }
    // image ends here

    $img = Image::create([
        'image_name' => $request->image_name,
        'image' => $profileImage,
    ]);
    //dd($img);
        return redirect()->route('images')->with('success', 'Image created successfully!');
    }


    public function edit($id){
        $img = Image::find($id);
        return view('backend.image.edit', compact('img'));
    }

    /*
     //for image
     if ($image = $request->file('image')) {
        $destinationPath = 'images/backend/categories';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $request['image'] = "$profileImage";
    }
    // image ends here

    $category = Category::create([
        'name' => $request->name,
        'description' => $request->description,
        'slug' => $request->slug,
        'image' => $profileImage,
    ]);
    */

    public function update(Request $request, $id){

        //for image
     if ($image = $request->file('image')) {
        $destinationPath = 'backend/photos';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $request['image'] = "$profileImage";
    }
    // image ends here

        $image = Image::find($id);
        $img = $image->update([
            'image_name' => $request->image_name,
            'image' => $profileImage,
        ]);
        //dd($img);
        return redirect()->route('images')->with('success', 'Image updated successfully');
    }

    public function destroy($id){
        $img = Image::find($id);
        $img->delete();
        return redirect()->route('images')->with('success', 'Image deleted successfully');
    }


}
