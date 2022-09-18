<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;

use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView ('myPDF', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    }
}
