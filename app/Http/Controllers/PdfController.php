<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;

class PdfController extends Controller
{
    public function index(){
        $pdfs = Pdf::all();
        return view('backend.pdf.index', compact('pdfs'));
    }

    public function create(){
        return view('backend.pdf.create');
    }

    public function store(Request $request){

        //for image
     if ($pdf = $request->file('pdf')) {
        $destinationPath = 'backend/pdf';
        $profilePdf = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
        $pdf->move($destinationPath, $profilePdf);
        $request['pdf'] = "$profilePdf";
    }
    // image ends here
    $separate = explode('.', $profilePdf);

    if($profilePdf){
        if($separate[1] === "pdf"){
            $img = Pdf::create([
                'fileName' => $request->fileName,
                'pdf' => $profilePdf,
            ]);
        }else{
            dd($separate);
        }
    }


    
    //dd($img);
        return redirect()->route('pdf')->with('success', 'Pdf created successfully!');
    }
}
