<?php

namespace App\Http\Controllers;

use App\Models\Anamnese;
use App\Models\Khitan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RiwayatController extends Controller
{
    //
    public function index()
    {
        // Menghitung jumlah pendaftaran per bulan
        $patientData = Pendaftaran::selectRaw('count(id) as count, MONTH(created_at) as month')
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->map(function ($item) {
                return [
                    'count' => $item->count,
                    'month' => Carbon::createFromFormat('m', $item->month)->format('F')
                ];
            });

        // Menghitung jumlah khitan per bulan
        $khitanData = Khitan::selectRaw('count(id) as count, MONTH(created_at) as month')
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->map(function ($item) {
                return [
                    'count' => $item->count,
                    'month' => Carbon::createFromFormat('m', $item->month)->format('F')
                ];
            });

        return view('pages.riwayat.index', compact('patientData', 'khitanData'));
    }
    public function pasien_priksa(Request $request)
    {
        $dataPriksa = Pendaftaran::all();
        $khitanss = Khitan::all();
        // return response()->json($dataPriksa);

        return view('pages.riwayat.index', compact('dataPriksa', 'khitanss'));
    }
}
