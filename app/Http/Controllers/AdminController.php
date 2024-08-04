<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Anamnese;
use App\Models\Pendaftaran;
use App\Models\Khitan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //untuk dinamis dashboard
    public function index()
    {
        $jmlpasien = Pendaftaran::count();
        $jmlkhitan = Khitan::count();
        // $belumDiperiksa = Anamnese::where('gejala', 'belum diperiksa')
        //     ->orWhere('diagnosa', 'belum diperiksa')
        //     ->orWhere('terapi', 'belum diperiksa')
        //     ->count();
        $patientData = $this->getWeeklyData(Pendaftaran::class);
        $khitanData = $this->getWeeklyData(Khitan::class);
        // dd($patientData);
        return view('pages.admin.index', compact('jmlpasien', 'jmlkhitan', 'patientData', 'khitanData'));
    }
    private function getWeeklyData($model)
    {
        $data = [];
        $labels = [];
        $now = now();

        for ($i = 0; $i < 4; $i++) {
            $startOfWeek = $now->copy()->subWeeks($i)->startOfWeek();
            $endOfWeek = $now->copy()->subWeeks($i)->endOfWeek();
            $count = $model::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();
            $data[] = $count;
            $labels[] = 'Week ' . ($i + 1);
        }

        return ['labels' => array_reverse($labels), 'data' => array_reverse($data)];
    }

    public function data_pasien(Request $request)
    {

        $data = Pendaftaran::orderBy('created_at', 'DESC')->get();
        return view('pages.admin.data-pasien', compact('data'));
    }

    public function tambah_pasien()
    {
        return view('pages.admin.tambah-pasien');
    }

    public function add_pasien(Request $request)
    {
        $request->validate([
            'jenis_pemeriksaan' => 'required',
            'name' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'keterangan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kategori' => 'required',
        ], [
            'jenis_pemeriksaan' => 'Pilih Jenis Periksa',
            'name.required' => 'Nama Wajib Di isi',
            'tanggal_lahir.required' => 'Tanggal Lahir Wajib Di isi',
            'usia.required' => 'Usia Wajib Di isi',
            'keterangan.required' => 'Keterangan Wajib Di isi',
            'jenis_kelamin.required' => 'Jenis Kelamin Wajib Di isi',
            'alamat.required' => 'Alamat Wajib Di isi',
            'kategori.required' => 'Tanggal Lahir Wajib Di isi'
        ]);

        // return response()->json($request->all());
        $addPasien = Pendaftaran::create([
            'jenis_pemeriksaan' => $request->jenis_pemeriksaan,
            'name' => $request->name,
            'tanggal_lahir' => $request->tanggal_lahir,
            'usia' => $request->usia,
            'keterangan' => $request->keterangan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomer_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
            'kategori' => $request->kategori,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        $anamnese = Anamnese::create([
            'pasien_id' => $addPasien->id,
            'poli' => $request->input('poli'),
            'tekanan_darah' => $request->input('tekanan_darah'),
            'suhu_tubuh' => $request->input('suhu_tubuh'),
            'gejala' => $request->input('gejala'),
            'diagnosa' => $request->input('diagnosa'),
            'terapi' => $request->input('terapi'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // return response()->json($request->all());
        if ($anamnese) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }

        // return response()->json($addPasien);
        return redirect('/admin/data-pasien');
    }


    public function edit(Request $request)
    {
        $pasien = Pendaftaran::find($request->id);
        return view('pages.admin.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari request
        $request->validate([
            'jenis_pemeriksaan' => 'required',
            'name' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'keterangan' => 'required',
            'jenis_kelamin' => 'required',
            'nomer_hp' => 'required',
            'alamat' => 'required',
            'kategori' => 'required',
        ]);

        // Temukan data pasien berdasarkan ID
        $pasien = Pendaftaran::find($id);

        // Jika pasien tidak ditemukan, redirect dengan pesan error
        if (!$pasien) {
            return redirect()->route('data-pasien')->with('error', 'Data not found.');
        }

        // Update data pasien dengan data dari request
        $pasien->jenis_pemeriksaan = $request->jenis_pemeriksaan;
        $pasien->name = $request->name;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->usia = $request->usia;
        $pasien->keterangan = $request->keterangan;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->nomer_hp = $request->nomer_hp;
        $pasien->alamat = $request->alamat;
        $pasien->kategori = $request->kategori;
        $pasien->save();


        // Redirect dengan pesan sukses ke halaman yang diinginkan
        return redirect()->route('data-pasien')->with('success', 'Data updated successfully');
    }


    public function hapuspendaftaran(Request $request)
    {
        Pendaftaran::where('id', $request->id)->delete();
        return redirect('/admin/data-pasien');
    }
}
