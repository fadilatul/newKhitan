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
        // Validasi data input (opsional tapi disarankan)
        $request->validate([
            'name' => 'required|string',
            'tempat' => 'nullable|string',
            'tanggal_lahir' => 'required|date',
            'usia' => 'required|integer',
            'agama' => 'nullable|in:islam,kristen,katolik,buddha,hindu,khonghucu',
            'pendidikan' => 'nullable|in:sd,smp,sma,pt',
            'pekerjaan' => 'required|string',
            'alergi_obat' => 'nullable|string',
            'bakat_kloid' => 'nullable|string',
            'name_orangtua' => 'required|string',
            'status' => 'nullable|in:belumkawin,kawin',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'nomer_hp' => 'nullable|string',
            'alamat' => 'required|string',
            'poli' => 'nullable|string',
            'tekanan_darah' => 'nullable|string',
            'suhu_tubuh' => 'nullable|string',
            'gejala_id' => 'nullable|integer',
            'suhu_tubuh' => 'nullable|string',
            'tinggi_badan' => 'nullable|integer',
            'berat_badan' => 'nullable|integer',
            'terapi_id' => 'nullable|integer',
        ]);

        // Menambahkan data pasien
        $addPasien = Pendaftaran::create([
            'name' => $request->name,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'usia' => $request->usia,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'alergi_obat' => $request->alergi_obat,
            'bakat_kloid' => $request->bakat_kloid,
            'name_orangtua' => $request->name_orangtua,
            'status' => $request->status,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomer_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
        ]);

        // Menambahkan data anamnese
        $anamnese = Anamnese::create([
            'pasien_id' => $addPasien->id,
            'poli' => $request->input('poli'),
            'tekanan_darah' => $request->input('tekanan_darah'),
            'suhu_tubuh' => $request->input('suhu_tubuh'),
            'gejala_id' => $request->input('gejala_id'),
            'diagnosa_id' => $request->input('diagnosa_id'),
            'terapi_id' => $request->input('terapi_id'),
        ]);

        if ($anamnese) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }
        // return response()->json($anamnese);
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
            'name' => 'required|string',
            'tempat' => 'nullable|string',
            'tanggal_lahir' => 'required|date',
            'usia' => 'required|integer',
            'agama' => 'nullable|in:islam,kristen,katolik,buddha,hindu,khonghucu',
            'pendidikan' => 'nullable|in:sd,smp,sma,pt',
            'pekerjaan' => 'required|string',
            'alergi_obat' => 'nullable|string',
            'bakat_kloid' => 'nullable|string',
            'name_orangtua' => 'required|string',
            'status' => 'nullable|in:belumkawin,kawin',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'nomer_hp' => 'nullable|string',
            'alamat' => 'required|string',
            // Menghilangkan validasi untuk anamnese fields
        ]);

        // Temukan data pasien berdasarkan ID
        $pasien = Pendaftaran::find($id);

        // Jika pasien tidak ditemukan, redirect dengan pesan error
        if (!$pasien) {
            return redirect()->route('data-pasien')->with('error', 'Data not found.');
        }

        // Update data pasien
        $pasien->update([
            'name' => $request->name,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'usia' => $request->usia,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'alergi_obat' => $request->alergi_obat,
            'bakat_kloid' => $request->bakat_kloid,
            'name_orangtua' => $request->name_orangtua,
            'status' => $request->status,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomer_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
        ]);

        // return response()->json($pasien);
        return redirect()->route('data-pasien')->with('success', 'Data updated successfully');
    }




    public function hapuspendaftaran(Request $request)
    {
        Pendaftaran::where('id', $request->id)->delete();
        return redirect('/admin/data-pasien');
    }
}
