<?php

namespace App\Http\Controllers;

use App\Models\tabel_hasil_konsultasi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardHasilKonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('dashboard.hasilKonsultasi.index',[
            'hasilkonsuldb'=>tabel_hasil_konsultasi::all()
        ]
       );
        
    }

    public function report()
    {
        $data = tabel_hasil_konsultasi::all();
        $pdf = Pdf::loadView('dashboard.hasilKonsultasi.report', ['Dthasilkonsul' => $data])->setPaper('a4', 'landscape');
        //return $pdf->download('datapasien.pdf');
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tabel_hasil_konsultasi $tabel_hasil_konsultasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tabel_hasil_konsultasi $tabel_hasil_konsultasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tabel_hasil_konsultasi $tabel_hasil_konsultasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tabel_hasil_konsultasi $tabel_hasil_konsultasi)
    {
        //
    }
}
