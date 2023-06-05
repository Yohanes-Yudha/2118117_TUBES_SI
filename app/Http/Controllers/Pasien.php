<?php

namespace App\Http\Controllers;

use App\Models\tabel_diagnosa;
use App\Models\User;
use App\Models\tabel_gejala;
use App\Models\tabel_gejala_penyakit;
use App\Models\tabel_konsultasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pasien extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pasien.index');
    }
    
    public function konsul(){
        $gejala = tabel_gejala::all();
        return view('pasien.test.index',compact('gejala'));
    }
    public function proses(Request $request){
        $data = tabel_gejala_penyakit::all();

        $aturan=[];
        // $aturan = [
        //     1 => [2,5,6],
        //     3=>[4,6,7]
        // ]
        foreach ($data as $item){
            if(!isset($aturan[$item->tabel_penyakit_id_penyakit])){
                $aturan[$item->tabel_penyakit_id_penyakit]=[];
            } //ini untuk mengecek apakah pada $aturan itu kosong atau tidak, jika kosong maka akan dibuatkan array yang kosong kemudian lanjut di bawah

            array_push($aturan[$item->tabel_penyakit_id_penyakit],$item->tabel_gejala_id_gejala);
            // ini untuk mengisi gejala di array penyakit
        }

        $gejala = [];
        //$gejala = [1,3,4,5,7]
        //ini buat memasukkan data gejala yang dicentang ke dalam array gejala
        foreach($request->input('gejala') as $key => $item){
            array_push($gejala,$key);
        }
        
        $hasil=[];
        // $hasil = [
        //     1 => 1,
        //     3 => 2
        //     
        // ]
        // ngecek apakah jika gejala di aturan ada yang cocok dengan gejala yang dichecklist user 
        // jika cocok maka gejala yang cocok akan dijumlahkan pada id penyakit
        // jadi intinya nyari kecocokan yang paling banyak pada aturan tersebut
        foreach($aturan as $key=>$rules){
            foreach($gejala as $value){
                if(in_array($value, $rules)){
                    if(!isset($hasil[$key])){
                        $hasil[$key]=1;
                    }else{
                        $hasil[$key]=$hasil[$key]+1;
                    }
                }
            }
        }

        $penyakit=0;
        if(count($hasil)>0){
            $max_keys = array_keys($hasil, max($hasil));
            $penyakit = $max_keys[0];
        }

        tabel_diagnosa::insert([
            'penyakit_id' => $penyakit,
            'user_id' => Auth::user()->id,
            'created_at'=> date('Y-m-d')
        ]);
        return redirect()->to('/pasien/report');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function report(){
        $data = tabel_diagnosa::join('tabel_penyakit','tabel_diagnosa.penyakit_id','=','tabel_penyakit.id_penyakit')
        ->join('users','tabel_diagnosa.user_id','=','users.id')->where('user_id',Auth::user()->id)
        ->get(['tabel_diagnosa.id','name','nama_penyakit','tabel_diagnosa.created_at as tanggal']);
        $dokter = User::where("role","dokter")->get();
        return view('pasien.report.index',compact('data','dokter'));
    }

    public function inputDiagnosa(Request $request)
    {
        $data=[
                'id_dokter'=>$request->input('dokter'),
                'id_user'=>$request->input('user_id',Auth::user()->id),
                'tanggal'=>$request->input('tanggal'),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ];
            $konsultasi = tabel_konsultasi::create($data);
            return redirect('/pasien/report/konsultasi');
    }

    public function konsultasi(){
        $konsultasi = tabel_konsultasi::join('users','tabel_konsultasi.id_dokter','=','users.id')
        ->where('id_user',Auth::user()->id)->get(['tabel_konsultasi.id','users.name','tabel_konsultasi.tanggal']);
        return view('pasien.konsultasi.index',compact('konsultasi'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $diagnosa=tabel_diagnosa::find($id);
        return view ('pasien.report.edit',compact(['diagnosa']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
