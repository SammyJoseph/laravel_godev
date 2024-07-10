<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index(): View
    {
        return view('clase-17.index-pdf');
    }

    public function download()
    {
        // $pdf = Pdf::loadView('clase-17.index-pdf');

        /* $pdf = Pdf::setOption([
            'dpi' => 150,
            'defaultFont' => 'Arial',
            'defaultPaperSize' => 'A4',
            ])->loadView('clase-17.index-pdf'); */
            
        $pdf = Pdf::setPaper('a4', 'landscape')->loadView('clase-17.index-pdf');

        return $pdf->download('clase-17-2.pdf');
    }
}
