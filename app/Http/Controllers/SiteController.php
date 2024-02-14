<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Personal_detail;
use App\Models\Place_of_work;
use App\Models\Reference;
use App\Models\Language;
use App\Models\Interest;
use App\Models\Contact;
use App\Models\Pdf;

class SiteController extends Controller
{
    public function index(Request $request){
        $imgs = Image::all();
        $pdfs = Pdf::all();
        $pers = Personal_detail::all();
        $pows = Place_of_work::all();
        $refs = Reference::all();
        $langs = Language::all();
        $hobs = Interest::all();
        
        return view('frontend.site_pages.index', compact(['imgs', 'pers', 'pows', 'refs', 'langs', 'hobs', 'pdfs']));
    }

    public function showPdf($id){
        $pdf = Pdf::find($id);
        return view('frontend.site_pages.showPdf', compact('pdf'));
    }


    public function create(Request $request){
         $cont = Contact::create([
            'c_name' => $request->c_name,
            'c_email' => $request->c_email,
            'c_subject' => $request->c_subject,
            'c_message' => $request->c_message,

        ]);
        if($cont){
            return redirect('/')->with('success', 'Thanks for contact me!');
        }else{
            return redirect('/')->with('success', 'Please fill the contact form properly.');   
        }
    }
}
