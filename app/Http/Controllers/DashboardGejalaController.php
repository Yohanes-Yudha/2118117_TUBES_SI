<?php

namespace App\Http\Controllers;

use App\Models\tabel_gejala;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardGejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.gejala.index',[
            'gejala' => tabel_gejala::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.gejala.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //ada request untuk menampung inputan user
           
         tabel_gejala::create($request->except(['_token','submit']));
         return redirect('/dashboard/gejala');
    }

    /**
     * Display the specified resource.
     */
    public function show(tabel_gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_gejala)
    {
        $gejala=tabel_gejala::find($id_gejala);
        return view ('dashboard.gejala.edit',compact(['gejala']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_gejala)
    {
        $gejala=tabel_gejala::find($id_gejala);
        $gejala->update($request->except(['_token','submit']));
        return redirect('/dashboard/gejala');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_gejala)
    {
        $gejala=tabel_gejala::find($id_gejala);
        $gejala->delete();
        return redirect('/dashboard/gejala');
    }
}
