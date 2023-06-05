<?php

namespace App\Http\Controllers;

use App\Models\kabupaten;
use App\Models\provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardKabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kabupaten = DB::table('kabupaten')->join('provinsi','provinsi.id','=','kabupaten.id_prov')
        ->select('kabupaten.id as id_kab', 'kabupaten.nama as nama_kab','kabupaten.id_prov','provinsi.nama as nama_prov')
        ->get();
        return view('dashboard.kabupaten.index',[
            'kabupaten'=>$kabupaten
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinsi = provinsi::all();
        
        return view ('dashboard.kabupaten.create',compact('provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         kabupaten::create($request->except(['_token','submit']));
         return redirect('/dashboard/kabupaten');
    }

    /**
     * Display the specified resource.
     */
    public function show(kabupaten $kabupaten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {   
        $kabupaten=kabupaten::find($id);
       
        $provinsi=provinsi::all();
        // $kabupaten = DB::table('kabupaten')->join('provinsi','provinsi.id','=','kabupaten.id_prov')
        // ->select('kabupaten.id as id_kab', 'kabupaten.nama as nama_kab','kabupaten.id_prov','provinsi.nama as nama_prov')
        // ->get();
        return view ('dashboard.kabupaten.edit',compact(['kabupaten','provinsi']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kabupaten=kabupaten::find($id);
        $kabupaten->update($request->except(['_token','submit']));
        return redirect('/dashboard/kabupaten');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $kabupaten=kabupaten::find($id);
        $kabupaten->delete();
        return redirect('/dashboard/kabupaten');
    }
}
