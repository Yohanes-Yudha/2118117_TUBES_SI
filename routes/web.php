<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardGejalaController;
use App\Http\Controllers\DashboardPenyakitController;
use App\Http\Controllers\DashboardAturanController;
use App\Http\Controllers\DashboardPasienController;
use App\Http\Controllers\DashboardKonsultasiController;
use App\Http\Controllers\DashboardDokterController;
use App\Http\Controllers\DashboardDiagnosaController;
use App\Http\Controllers\DashboardHasilKonsultasiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardKabupatenController;
use App\Http\Controllers\DashboardProvinsiController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\Pasien;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
// Menampilkan form login
Route::get('/login', 'AuthController@showLoginForm')->name('login');
// Menangani login
Route::post('/login', 'AuthController@login');
// Menampilkan form register
Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
// Menangani register
Route::post('/register', 'AuthController@register');
// Logout
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::resource('/dashboard/gejala', DashboardGejalaController::class);
Route::get('/dashboard/gejala/create', [DashboardGejalaController::class, 'create']);
Route::post('/dashboard/gejala/store', [DashboardGejalaController::class, 'store']);
Route::get('/dashboard/gejala/{id_gejala}/edit', [DashboardGejalaController::class, 'edit']);
Route::put('/dashboard/gejala/{id_gejala}', [DashboardGejalaController::class, 'update']);
Route::delete('/dashboard/gejala/{id_gejala}', [DashboardGejalaController::class, 'destroy']);


Route::resource('/dashboard/penyakit', DashboardPenyakitController::class);
Route::get('/dashboard/penyakit/create', [DashboardPenyakitController::class, 'create']);
Route::post('/dashboard/penyakit/store', [DashboardPenyakitController::class, 'store']);
Route::get('/dashboard/penyakit/{id_penyakit}/edit', [DashboardPenyakitController::class, 'edit']);
Route::put('/dashboard/penyakit/{id_penyakit}', [DashboardPenyakitController::class, 'update']);

Route::resource('/dashboard/aturan', DashboardAturanController::class);
Route::post('/dashboard/aturan/store', [DashboardAturanController::class, 'store']);
Route::get('/dashboard/aturan/{id_penyakit}/edit', [DashboardAturanController::class, 'edit']);
Route::put('/dashboard/aturan/{id_penyakit}/edit', [DashboardAturanController::class, 'update']);
Route::delete('/dashboard/aturan/{id_penyakit}', [DashboardAturanController::class, 'destroy']);

Route::resource('/dashboard/pasien', DashboardPasienController::class);
//Route::get('/dashboard/pasien/{id}/edit', [DashboardPasienController::class, 'edit']);
Route::get('/dashboard/pasien/{id}/edit', [DashboardPasienController::class, 'edit'])->name('dashboard.pasien.edit');
Route::put('/dashboard/pasien/{id}', [DashboardPasienController::class, 'update'])->name('dashboard.pasien.update');
Route::get('/pasienreport', [DashboardPasienController::class, 'report']);
Route::delete('/dashboard/pasien/{id}', [DashboardPasienController::class, 'destroy']);


Route::resource('/dashboard/konsultasi', DashboardKonsultasiController::class);
Route::get('/konsulreport', [DashboardKonsultasiController::class,'report']);

Route::resource('/dashboard/dokter', DashboardDokterController::class);
Route::post('/dashboard/dokter/store', [DashboardDokterController::class, 'store']);
Route::get('/dashboard/dokter/{id}/edit', [DashboardDokterController::class, 'edit']);
Route::get('/get-kabupaten/{provinsiId}', [DashboardDokterController::class, 'getKabupaten']);
Route::get('/dokterreport', [DashboardDokterController::class, 'report']);

Route::resource('/dashboard/diagnosa', DashboardDiagnosaController::class);
Route::get('/diagnosareport', [DashboardDiagnosaController::class,'report']);

Route::resource('/dashboard/hasilkonsultasi', DashboardHasilKonsultasiController::class);
Route::get('/hasilkonsulreport', [DashboardHasilKonsultasiController::class,'report']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.index');
});

Route::middleware(['auth', 'role:pasien'])->prefix('pasien')->group(function () {
    Route::get('/', [App\Http\Controllers\Pasien::class, 'index'])->name('pasien.index');
});

Route::middleware(['auth', 'role:dokter'])->prefix('dokter')->group(function () {
    Route::get('/', [App\Http\Controllers\DokterController::class, 'index'])->name('dokter.index');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'role:admin']);

Route::get('/pasien', function () {
    return view('pasien.index');
})->middleware(['auth', 'role:pasien']);

Route::get('/dokter', function () {
    return view('dokter.index');
})->middleware(['auth', 'role:dokter']);

Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/pasien/test',[Pasien::class, 'konsul'])->name('pasien.index')->middleware(['auth', 'role:pasien']);
Route::post('/pasien/test',[Pasien::class,'proses']);
Route::get('pasien/report',[Pasien::class,'report']);
Route::post('pasien/report/konsultasi',[Pasien::class,'inputDiagnosa']);
Route::get('pasien/report/konsultasi',[Pasien::class,'konsultasi']);

Route::get('/dokter',[DokterController::class,'index'])->name('dokter.index')->middleware(['auth', 'role:dokter,admin']);;
Route::get('/dokter/create',[DokterController::class,'create']);
Route::post('/store',[DokterController::class,'store']);
Route::get('/dokter/{id}/edit', [DokterController::class, 'edit']);
Route::put('/dokter/{id}', [DokterController::class, 'update']);
Route::get('/reporthasil', [DokterController::class, 'report']);
Route::delete('/dokter/{id}', [DokterController::class, 'destroy']);

Route::get('dashboard/provinsi',[DashboardProvinsiController::class,'index']);
Route::get('dashboard/provinsi/create',[DashboardProvinsiController::class,'create']);
Route::post('dashboard/provinsi/store',[DashboardProvinsiController::class,'store']);
Route::get('dashboard/provinsi/{id}/edit',[DashboardProvinsiController::class,'edit']);
Route::put('dashboard/provinsi/{id}/edit',[DashboardProvinsiController::class,'update']);
Route::put('dashboard/provinsi/{id}/edit',[DashboardProvinsiController::class,'update']);
Route::delete('dashboard/provinsi/{id}',[DashboardProvinsiController::class,'destroy']);

Route::get('dashboard/kabupaten',[DashboardKabupatenController::class,'index']);
Route::get('dashboard/kabupaten/create',[DashboardKabupatenController::class,'create']);
Route::post('dashboard/kabupaten/store',[DashboardKabupatenController::class,'store']);
Route::get('dashboard/kabupaten/{id}/edit',[DashboardKabupatenController::class,'edit']);
Route::put('dashboard/kabupaten/{id}/edit',[DashboardKabupatenController::class,'update']);
Route::delete('dashboard/kabupaten/{id}',[DashboardKabupatenController::class,'destroy']);
