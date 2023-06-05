<?php

namespace App\Http\Controllers;

use App\Models\tabel_gejala;
use App\Models\tabel_penyakit;
use Illuminate\Http\Request;


class DashboardPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.penyakit.index',[
            'penyakit' => tabel_penyakit::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        return view ('dashboard.penyakit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        tabel_penyakit::create($request->except(['_token','submit']));
        // $penyakit->gejala()->attach($request->input('gejala'));
        
         return redirect('/dashboard/penyakit');
    }

    /**
     * Display the specified resource.
     */
    public function show(tabel_penyakit $tabel_penyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id_penyakit)
    {
        $penyakit=tabel_penyakit::find($id_penyakit);
        return view ('dashboard.penyakit.edit',compact(['penyakit']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_penyakit)
    {
        $penyakit=tabel_penyakit::find($id_penyakit);
        $penyakit->update($request->except(['_token','submit']));
        return redirect('/dashboard/penyakit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_penyakit)
    {
        $penyakit=tabel_penyakit::find($id_penyakit);
        $penyakit->delete();
        return redirect('/dashboard/penyakit');
    }
}
