<?php

namespace App\Http\Controllers;

use App\Models\tabel_diagnosa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;


class DashboardDiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = tabel_diagnosa::join('tabel_penyakit','tabel_diagnosa.penyakit_id','=','tabel_penyakit.id_penyakit')
        ->join('users','tabel_diagnosa.user_id','=','users.id')->get();
        return view('dashboard.diagnosa.index',compact('data'));
    }
    public function report()
    {
        $data = tabel_diagnosa::join('tabel_penyakit','tabel_diagnosa.penyakit_id','=','tabel_penyakit.id_penyakit')
        ->join('users','tabel_diagnosa.user_id','=','users.id')->get();
        $pdf = Pdf::loadView('dashboard.diagnosa.report', ['Dtdiagnosa' => $data])->setPaper('a4', 'landscape');
        //return $pdf->download('DataDokter.pdf');
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
    public function show(tabel_diagnosa $tabel_diagnosa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tabel_diagnosa $tabel_diagnosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tabel_diagnosa $tabel_diagnosa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tabel_diagnosa $tabel_diagnosa)
    {
        //
    }
}
