<?php

namespace App\Http\Controllers;

use App\Models\tabel_dokter;

use App\Models\User;
use App\Models\provinsi;
use App\Models\kabupaten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\PDF;

class DashboardDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $provinsi = Provinsi::all();

        // $kabupaten = DB::table('kabupaten')
        //     ->join('provinsi', 'provinsi.id', '=', 'kabupaten.id_prov')
        //     ->select('kabupaten.id as id_kab', 'kabupaten.nama as nama_kab', 'kabupaten.id_prov', 'provinsi.nama as nama_prov')
        //     ->get();

        // $users = User::join('kabupaten', 'kabupaten.id', '=', 'users.id_kab')
        // ->where('users.role', 'dokter')
        // ->select('users.id', 'users.name', 'kabupaten.nama as nama_kabupaten')
        // ->get();
        $user = User::join('kabupaten', 'kabupaten.id', '=', 'users.id_kab')
        ->join('provinsi', 'provinsi.id', '=', 'kabupaten.id_prov')
        ->where('users.role', 'dokter')
        ->select('users.id', 'users.name as nama_user', 'users.email', 'users.role', 'kabupaten.nama as nama_kabupaten', 'provinsi.nama as nama_provinsi')
        ->get();
    


        return view('dashboard.dokter.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinsi=provinsi::all();
        $kabupaten=kabupaten::all();
        return view ('dashboard.dokter.create',compact('provinsi','kabupaten'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
            'id_kab'=>$request->input('id_kab'),
            'id_prov'=>$request->input('id_prov')
        ];
        
        User::create($data);
        
        return redirect('/dashboard/dokter');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(tabel_dokter $tabel_dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $provinsi=provinsi::all();
        $kabupaten=kabupaten::all();
        $user=User::find($id);
        return view ('dashboard.dokter.edit',compact(['user','provinsi','kabupaten']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $user->update($request->except(['_token','submit']));
        return redirect('/dashboard/dokter');
    }

    public function getKabupaten($provinsiId)
    {
    $kabupaten = Kabupaten::where('id_prov', $provinsiId)->pluck('nama', 'id')->toArray();
    return response()->json($kabupaten);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('/dashboard/dokter');
    }
    
    public function report()
    {
        $user = User::join('kabupaten', 'kabupaten.id', '=', 'users.id_kab')
        ->join('provinsi', 'provinsi.id', '=', 'kabupaten.id_prov')
        ->where('users.role', 'dokter')
        ->select('users.id', 'users.name as nama_user', 'users.email', 'users.role', 'kabupaten.nama as nama_kabupaten', 'provinsi.nama as nama_provinsi')
        ->get();
        $pdf = Pdf::loadView('dashboard.dokter.report', ['DtDokter' => $user])->setPaper('a4', 'landscape');
        //return $pdf->download('DataDokter.pdf');
        return $pdf->stream();
    }
}
