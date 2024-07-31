<?php

// namespace App\Http\Controllers;

// use App\Models\Pendaftaran;
// use App\Models\Khitan;
// use Illuminate\Support\Facades\DB;

// class ChartController extends Controller
// {
//     public function index()
//     {
//         $jmlpasien = Pendaftaran::count();
//         $jmlkhitan = Khitan::count();
//         $belumDiperiksa = Pendaftaran::where('status', 'belum diperiksa')->count();

//         // Ambil data pasien pendaftaran dan khitan per minggu dalam satu bulan
//         $patientData = $this->getWeeklyData(Pendaftaran::class);
//         $khitanData = $this->getWeeklyData(Khitan::class);

//         return view('index', compact('jmlpasien', 'jmlkhitan', 'belumDiperiksa', 'patientData', 'khitanData'));
//     }

//     private function getWeeklyData($model)
//     {
//         // Mengambil data pasien per minggu dalam satu bulan
//         $data = $model::select(DB::raw('WEEK(created_at, 1) as week'), DB::raw('COUNT(*) as count'))
//             ->groupBy('week')
//             ->orderBy('week')
//             ->get();

//         $labels = ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'];
//         $counts = array_fill(0, 4, 0);

//         foreach ($data as $item) {
//             if ($item->week <= 4) {
//                 $counts[$item->week - 1] = $item->count;
//             }
//         }

//         return [
//             'labels' => $labels,
//             'data' => $counts
//         ];
//     }
// }
