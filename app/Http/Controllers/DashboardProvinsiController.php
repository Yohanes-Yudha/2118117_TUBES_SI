<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Http\Request;

class DashboardProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.provinsi.index',[
            'provinsi' => provinsi::all()
        ]);
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        provinsi::create($request->except(['_token','submit']));
        return redirect('/dashboard/provinsi');
    }

    /**
     * Display the specified resource.
     */
    public function show(provinsi $provinsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $provinsi=provinsi::find($id);
        return view ('dashboard.provinsi.edit',compact(['provinsi']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $provinsi=provinsi::find($id);
        $provinsi->update($request->except(['_token','submit']));
        return redirect('/dashboard/provinsi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $provinsi=provinsi::find($id);
        $provinsi->delete();
        return redirect('/dashboard/provinsi');
    }
}
