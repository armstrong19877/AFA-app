<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('backend.contact.index', compact('contacts'));
    }


public function destroy($id){
    $cont = Contact::find($id);
    $cont->delete();
    return redirect()->route('contacts')->with('success', 'Contact message deleted successfully');
    }
    
}