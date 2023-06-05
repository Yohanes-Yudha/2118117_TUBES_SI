<?php

namespace App\Http\Controllers;

use App\Models\tabel_gejala;
use App\Models\tabel_penyakit;
use App\Models\tabel_gejala_penyakit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardAturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gejala=tabel_gejala::all();
        $penyakit=tabel_penyakit::all();
            // 'aturan'=>tabel_rule_gejala::all(),
        // $gejala = tabel_gejala::with(['penyakit'])->get();
        // $penyakit = tabel_penyakit::with(['gejala'])->get();
        // $aturan = tabel_gejala_penyakit::with('penyakit','gejala')->get();
        $array = [
            'penyakit'=>$penyakit,
            'gejala'=>$gejala
        ];
        return view('dashboard.aturan.index',$array);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penyakit = tabel_penyakit::all();
        $gejala = tabel_gejala::all();
        return view ('dashboard.aturan.create', compact('penyakit','gejala'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data=[
        //     'id_penyakit'=>$request->input('id_penyakit'),
        //     'id_gejala'=>$request->input('id_gejala'),
        //     'nama_gejala'=>$request->input('nama_gejala'),
        //     'nama_penyakit'=>$request->input('nama_penyakit'),
        //     'created_at'=>Carbon::now(),
        //     'updated_at'=>Carbon::now(),
        // ];
        
        // $aturan = tabel_gejala_penyakit::create($data);
        // $aturan->penyakit()->associate($request->input('id_penyakit'));
        // $aturan->gejala()->associate($request->input('id_gejala')); 
        // tabel_gejala_penyakit::create($request->except(['_token','submit']));
        // return redirect('/dashboard/aturan');
    }

    /**
     * Display the specified resource.
     */
    public function show(tabel_gejala_penyakit $tabel_rule_gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_penyakit)
    {
        $penyakit=tabel_penyakit::findOrFail($id_penyakit);
        $gejala=tabel_gejala::all();
        $array = [
            'penyakit'=>$penyakit,
            'gejala'=>$gejala
        ];
        return view ('dashboard.aturan.edit',$array);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_penyakit)
    {
        $penyakit=tabel_penyakit::find($id_penyakit);
        tabel_penyakit::where('id_penyakit',$id_penyakit)->update([
        'nama_penyakit'=>$request->nama_penyakit,
        // 'deskripsi'=>$request->deskripsi,
        ]);
        $penyakit->gejalas()->sync($request->gejala);
        return redirect('/dashboard/aturan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_penyakit)
    {
        $penyakit=tabel_penyakit::find($id_penyakit);
        $penyakit->delete();
        return redirect('/dashboard/aturan');
    }
}
