<?php

namespace App\Http\Controllers;

use App\Models\tabel_konsultasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\PDF;
class DashboardKonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     // $consultations = tabel_konsultasi::whereHas('pasien', function ($query) {
    //     //     $query->where('role', 'pasien');
    //     // })->get();
    //     $pasien = tabel_konsultasi::all();
    //    // dd($pasien);
    //     return view('dashboard.konsultasi.index', compact('pasien'));
        
    //     // $user = tabel_konsultasi::where('role','pasien',)->get();
    //     // return view('dashboard.konsultasi.index', compact('user'));
        
    //     // $konsultasi = tabel_konsultasi::with('user');
    //     // return view('dashboard.konsultasi.index',[
    //     //     'konsultasi'=>$konsultasi
    //     // ]);

        // $konsultasi = tabel_konsultasi::join('users','tabel_konsultasi.id_dokter','=','users.id')->where('id_user',Auth::user()->id)->get(['tabel_konsultasi.id','users.name','tabel_konsultasi.tanggal']);
        // return view('dashboard.konsultasi.index',compact('konsultasi'));
       
        $konsultasi = tabel_konsultasi::join('users', 'tabel_konsultasi.id_dokter', '=', 'users.id')
        ->join('users as pasien','tabel_konsultasi.id_user','=','pasien.id') 
        ->select('tabel_konsultasi.id', 'users.name as nama_dokter', 'pasien.name as nama_pasien', 'tabel_konsultasi.tanggal')
        ->get();
    
        return view('dashboard.konsultasi.index',compact('konsultasi'));
        // $data = tabel_diagnosa::join('tabel_penyakit','tabel_diagnosa.penyakit_id','=','tabel_penyakit.id_penyakit')
        // ->join('users','tabel_diagnosa.user_id','=','users.id')->get();
        // return view('dashboard.diagnosa.index',compact('data'));
    }

    public function report()
    {
        $konsultasi = tabel_konsultasi::join('users', 'tabel_konsultasi.id_dokter', '=', 'users.id')
        ->join('users as pasien','tabel_konsultasi.id_user','=','pasien.id') 
        ->select('tabel_konsultasi.id', 'users.name as nama_dokter', 'pasien.name as nama_pasien', 'tabel_konsultasi.tanggal')
        ->get();
        $pdf = Pdf::loadView('dashboard.konsultasi.report', ['Dtkonsul' => $konsultasi])->setPaper('a4', 'landscape');
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
    public function show(tabel_konsultasi $tabel_konsultasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tabel_konsultasi $tabel_konsultasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tabel_konsultasi $tabel_konsultasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tabel_konsultasi $tabel_konsultasi)
    {
        //
    }
}
