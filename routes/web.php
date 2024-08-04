<?php

use App\Models\Khitan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\DoktorController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\KhitanController;
use App\Http\Controllers\TerapiController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\ExcelExportController;

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

Route::get('/errors', function () {
    return view('component.errors');
});

Route::get('/coba', function () {
    return view('pages.ujicoba');
});



// ***********************AUTH******************************
Route::get('/', [AuthController::class, 'index'])->middleware('isUser');
Route::post('/', [AuthController::class, 'login'])->middleware('isUser');
Route::get('/logout', [AuthController::class, 'logout']);


// *****************Admin**********************************
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('isLogin', 'AdminRole');
Route::get('/admin/data-pasien', [AdminController::class, 'data_pasien'])->name('data-pasien')->middleware('isLogin', 'AdminRole');
Route::get('/admin/tambah-pasien', [AdminController::class, 'tambah_pasien'])->name('tambah-data');
Route::post('/admin/tambah-pasien', [AdminController::class, 'add_pasien']);
Route::get('/admin/edit-pasien/{id}', [AdminController::class, 'edit'])->name('edit_pasien');
Route::post('/admin/update-pasien/{id}', [AdminController::class, 'update'])->name('update_pasien');

Route::post('/admin/delete/{id}', [AdminController::class, 'hapuspendaftaran'])->name('delete-data');


//*****************Dokter********************************** */
Route::get('/dokter', [DoktorController::class, 'index'])->name('dokter')->middleware('isLogin', 'DokterRole');
Route::get('/dokter/priksa', [DoktorController::class, 'priksa_umum'])->name('data-priksa')->middleware('isLogin', 'DokterRole');
Route::get('/dokter/gigi', [DoktorController::class, 'priksa_gigi'])->name('data-gigi')->middleware('isLogin', 'DokterRole');;
Route::post('/dokter/gigi/{id}', [DoktorController::class, 'hapus'])->name('delete-gigi');
Route::post('/dokter/priksa/{id}', [DoktorController::class, 'hapus_periksa'])->name('delete-periksa');

// *****************Rekam Medis**********************************
Route::get('rekam-medis/{pasien_id}', [RekamController::class, 'rekam_medis'])->name('rekam_medis');
Route::get('rekam-gigi/{pasien_id}', [RekamController::class, 'rekam_dokterGigi'])->name('rekam_gigi');
Route::get('rekam-umum/{pasien_id}', [RekamController::class, 'rekam_dokterumum'])->name('rekam_umum');
Route::post('rekam-umum/delete/{pasien_id}', [RekamController::class, 'hapusUmum'])->name('hapus_umum');
Route::get('rekam-medis/{pasien_id}/tambah', [RekamController::class, 'tambah_rekam'])->name('tambah_rekam');
Route::post('rekam-medis/{pasien_id}/add', [RekamController::class, 'add_rekam'])->name('add_rekam');
Route::get('rekam-medis/{pasien_id}/edit', [RekamController::class, 'edit_rekam'])->name('edit_rekam');
Route::post('rekam-medis/{pasien_id}/update-medis', [RekamController::class, 'update_rekam'])->name('update_rekam');
// Route::post('rekam-medis/delete/{pasien_id}', [RekamController::class, 'hapus'])->name('hapus');
Route::post('rekam-medis/deletegigi/{pasien_id}', [RekamController::class, 'hapusgigi'])->name('hapus_gigi');


// *****************Exel download**********************************
Route::get('/export-excel', [ExcelExportController::class, 'export']);

// *****************Khitan**********************************
Route::get('/khitan', [KhitanController::class, 'index'])->name('khitan');
Route::get('/tambah-khitan', [KhitanController::class, 'create'])->name('tambah_khitan');
Route::post('/add-khitan', [KhitanController::class, 'add']);

Route::post('/delete/{id}', [KhitanController::class, 'hapus'])->name('delete');
Route::get('khitan/{id}/detail', [KhitanController::class, 'detail'])->name('detail_khitan');
Route::get('/khitan/edit/{id}', [KhitanController::class, 'edit'])->name('edit_khitan');
Route::post('/khitan/update/{id}', [KhitanController::class, 'update'])->name('update_khitan');


// *****************Riwayat**********************************
Route::get('/riwayat', [RiwayatController::class, 'pasien_priksa'])->name('riwayat');
// *****************Grafik**********************************

//crud dokter umummm
Route::get('/patients/{id}/edit', [DoktorController::class, 'edit'])->name('patients.edit');
Route::put('/patients/{id}', [DoktorController::class, 'update'])->name('patients.update');
Route::delete('/patients/{id}', [DoktorController::class, 'destroy'])->name('patients.destroy');
// untuk data master
// Route::resource('gejala', GejalaController::class);
// Route::resource('diagnosa', DiagnosaController::class);
// Route::resource('terapi', TerapiController::class);
Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala');
Route::get('/diagnosa', [DiagnosaController::class, 'index'])->name('diagnosa');
Route::get('/terapi', [TerapiController::class, 'index'])->name('terapi');
