<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\PDF;
class DashboardPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('role', 'pasien')->get();
        return view('dashboard.pasien.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.pasien.create');
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
    public function show(User $tabel_pasien)
    {
        //
    }

    public function edit( $id)
    {
        $user = User::where('role', 'pasien')->find($id);
        return view('dashboard.pasien.edit', compact('user'));
    }

    public function update(Request $request,$id)
    {
        $user = User::where('role', 'pasien')->find($id);
    
        $data = [
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ];
        
        $user->update($data);
    

    return redirect('/dashboard/pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('/dashboard/pasien');
    }

    public function report()
    {
        $user = User::where('role', 'pasien')->get();
        $pdf = Pdf::loadView('dashboard.pasien.report', ['DtPasien' => $user])->setPaper('a4', 'landscape');
        //return $pdf->download('datapasien.pdf');
        return $pdf->stream();
    }
}
