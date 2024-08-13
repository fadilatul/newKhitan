<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Gejala;
use App\Models\Terapi;
use App\Models\Anamnese;
use App\Models\Diagnosa;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RekamController extends Controller
{
    public function rekam_medis($pasien_id)
    {
        // Ambil semua data anamnese berdasarkan pasien_id
        $rekams = Anamnese::where('pasien_id', $pasien_id)->get();
        $pasien = Pendaftaran::find($pasien_id);
        return view('pages.rekam-medis.rekammedis', compact('rekams', 'pasien_id', 'pasien'));
    }

    public function rekam_dokterGigi(Request $request, $pasien_id)
    {
        // Ambil semua data anamnese berdasarkan pasien_id
        $rekamGigi = Anamnese::where('poli', 'gigi')->where('pasien_id', $pasien_id)->get();
        $pasien = Pendaftaran::find($pasien_id);
        return view('pages.rekam-medis.rekamgigi', compact('rekamGigi', 'pasien_id', 'pasien'));
    }

    public function rekam_dokterUmum(Request $request, $pasien_id)
    {
        // Ambil semua data anamnese berdasarkan pasien_id
        $rekamUmum = Anamnese::where('poli', 'umum')->where('pasien_id', $pasien_id)->get();
        $pasien = Pendaftaran::find($pasien_id);
        return view('pages.rekam-medis.rekamumum', compact('rekamUmum', 'pasien_id', 'pasien'));
    }

    public function tambah_rekam($pasien_id)
    {
        return view('pages.rekam-medis.tambah-rekam', compact('pasien_id'));
    }

    public function add_rekam(Request $request, $pasien_id)
    {
        $request->validate([
            'poli' => 'required',
            'tekanan_darah' => 'required',
            'suhu_tubuh' => 'required',
        ], [
            'poli.required' => 'Pilih Salah satu Poli',
            'tekanan_darah.required' => 'Wajib Di isi',
            'suhu_tubuh.required' => 'Wajib Di isi',
        ]);

        $addRekam = Anamnese::create([
            'poli' => $request->poli,
            'tekanan_darah' => $request->tekanan_darah,
            'suhu_tubuh' => $request->suhu_tubuh,
            'gejala_id' => $request->gejala,
            'diagnosa_id' => $request->diagnosa,
            'terapi_id' => $request->terapi,
            'pasien_id' => $pasien_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($addRekam) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }

        return redirect()->route('rekam_medis', $pasien_id);
    }

    public function edit_rekam($pasien_id)
    {
        $gejalagigi = Gejala::where('type', 'gigi')->get();
        $gejalaumum = Gejala::where('type', 'umum')->get();
        $diagnosagigi = Diagnosa::where('type', 'gigi')->get();
        $diagnosaumum = Diagnosa::where('type', 'umum')->get();
        $terapigigi = Terapi::where('type', 'gigi')->get();
        $terapiumum = Terapi::where('type', 'umum')->get();
        $rekams = Anamnese::where('pasien_id', $pasien_id)->latest('id')->first();
        return view('pages.rekam-medis.update-rekammedis', compact('pasien_id', 'rekams', 'gejalagigi', 'gejalaumum', 'diagnosagigi', 'diagnosaumum', 'terapigigi', 'terapiumum'));
    }

    public function update_rekam(Request $request, $pasien_id)
    {
        // Ambil rekam medis terbaru untuk pasien
        $rekams = Anamnese::where('pasien_id', $pasien_id)->latest('id')->first();

        // Update data rekam medis
        $rekams->tekanan_darah = $request->tekanan_darah;
        $rekams->suhu_tubuh = $request->suhu_tubuh;
        $rekams->gejala_id = $request->gejala_id;
        $rekams->diagnosa_id = $request->diagnosa_id;
        $rekams->terapi_id = $request->terapi_id;
        $rekams->biaya = $request->biaya;
        $rekams->save();

        // Redirect ke route yang sesuai berdasarkan poli
        if ($rekams->poli == 'umum') {
            return redirect()->route('rekam_umum', $pasien_id);
        } elseif ($rekams->poli == 'gigi') {
            return redirect()->route('rekam_gigi', $pasien_id);
        } else {
            // Handle kondisi jika poli tidak sesuai dengan yang diharapkan
            return redirect()->route('rekam_medis'); // Atau route lain yang sesuai
        }
    }

    //     // copy yaa
    public function hapusUmum($pasien_id)
    {
        $rekam = Anamnese::findOrFail($pasien_id);
        $rekam->delete();
        return back();
    }


    public function hapusgigi($pasien_id)
    {
        $hapusRekam = Anamnese::findOrFail($pasien_id);
        $hapusRekam->delete();
        return back();
    }
}
