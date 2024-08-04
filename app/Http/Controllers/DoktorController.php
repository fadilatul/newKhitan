<?php

namespace App\Http\Controllers;

use App\Models\Khitan;
use App\Models\Anamnese;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DoktorController extends Controller
{
    public function index()
    {
        $jumpasien = Pendaftaran::count();
        $jumkhit = Khitan::count();
        // $belumperiksa = Anamnese::where('gejala', 'belum diperiksa')
        //     ->orWhere('diagnosa', 'belum diperiksa')
        //     ->orWhere('terapi', 'belum diperiksa')
        //     ->count();
        $patientData = $this->getWeeklyData(Pendaftaran::class);
        $khitanData = $this->getWeeklyData(Khitan::class);

        return view('pages.dokter.index', compact('jumpasien', 'jumkhit', 'patientData', 'khitanData'));
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

    public function priksa_umum(Request $request)
    {
        $data_umum = Pendaftaran::where('jenis_pemeriksaan', 'periksa_umum')
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('pages.dokter.data-priksa', compact('data_umum'));
    }

    public function priksa_gigi(Request $request)
    {
        $data_gigi = Pendaftaran::where('jenis_pemeriksaan', 'periksa_gigi')
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('pages.dokter.data-gigi', compact('data_gigi'));
    }

    public function edit($id)
    {
        $patient = Pendaftaran::findOrFail($id);
        return view('pages.dokter.edit-umum', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'nomer_hp' => 'required|string|max:15',
        ]);

        $patient = Pendaftaran::findOrFail($id);
        $patient->name = $request->input('name');
        $patient->tanggal_lahir = $request->input('tanggal_lahir');
        $patient->alamat = $request->input('alamat');
        $patient->nomer_hp = $request->input('nomer_hp');
        $patient->save();

        return redirect()->route('data-priksa')->with('success', 'Data pasien berhasil diupdate');
    }

    public function destroy($id)
    {
        $patient = Pendaftaran::findOrFail($id);
        $patient->delete();
        return redirect()->route('data-priksa')->with('success', 'Pasien berhasil dihapus');
    }
    public function hapus($id)
    {
        $hapus = Pendaftaran::findOrFail($id);
        $hapus->delete();
        return back();
        // $patient = Pendaftaran::findOrFail($id);
        // $patient->delete();
        // return redirect()->route('data-priksa')->with('success', 'Pasien berhasil dihapus');
    }
    public function hapus_periksa($id)
    {
        $hapus = Pendaftaran::findOrFail($id);
        $hapus->delete();
        return back();
        // $patient = Pendaftaran::findOrFail($id);
        // $patient->delete();
        // return redirect()->route('data-priksa')->with('success', 'Pasien berhasil dihapus');
    }
}
