<?php

namespace App\Http\Controllers;
use App\Models\tabel_hasil_konsultasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\PDF;
class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user=tabel_hasil_konsultasi::join('Users','Users.id','=','tabel_hasil_konsultasi.id_user')
        ->where('id_user',Auth::user()->id)
        ->get(['tabel_hasil_konsultasi.id','users.name as nama_dokter','tabel_hasil_konsultasi.nama_pasien', 'tabel_hasil_konsultasi.hasil_konsultasi','tabel_hasil_konsultasi.created_at']);
        return view('dokter.index',compact('user'));
               
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=[
            'nama_dokter'=>$request->input('nama_dokter'),
            'nama_pasien'=>$request->input('nama_pasien'),
            'hasil_konsultasi'=>$request->input('hasil_konsultasi'),
            'id_user'=>Auth::id()
        ];
       tabel_hasil_konsultasi::create($data);
       return redirect('/dokter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $hasilkonsul=tabel_hasil_konsultasi::find($id);
        return view('dokter.edit',compact(['hasilkonsul']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hasilkonsul=tabel_hasil_konsultasi::find($id);
        $hasilkonsul->update($request->except(['_token','submit']));
        return redirect('/dokter');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hasilkonsul=tabel_hasil_konsultasi::find($id);
        $hasilkonsul->delete();
        return redirect('/dokter');
    }
    public function report(){
        $user=tabel_hasil_konsultasi::join('Users','Users.id','=','tabel_hasil_konsultasi.id_user')
        ->where('id_user',Auth::user()->id)
        ->get(['tabel_hasil_konsultasi.id','users.name as nama_dokter','tabel_hasil_konsultasi.nama_pasien', 'tabel_hasil_konsultasi.hasil_konsultasi','tabel_hasil_konsultasi.created_at']);
        $pdf = Pdf::loadView('dokter.report', ['DtHasilkonsul' => $user])->setPaper('a4', 'landscape');
        //return $pdf->download('DataDokter.pdf');
        return $pdf->stream();
    }
}
