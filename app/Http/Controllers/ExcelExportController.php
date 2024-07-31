<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class ExcelExportController extends Controller
{
    //
    public function export(Request $request)
    {
        // Ambil data dari database
        $pasien = Pendaftaran::all(
            ['name', 'tanggal_lahir', 'usia', 'jenis_kelamin', 'keterangan', 'nomer_hp', 'kategori', 'alamat']
        )->toArray();

        // Tambahkan header ke dalam data
        $data = [
            ['No', 'Name', 'Tanggal Lahir', 'Usia', 'Jenis Kelamin', 'Keterangan', 'Nomer HP', 'Kategori', 'Alamat']
        ];

        // Tambahkan nomor urut ke setiap baris data secara simple
        $pasienWithNumbers = array_map(function ($user, $index) {
            return array_merge(['No' => $index + 1], $user);
        }, $pasien, array_keys($pasien));

        // Gabungkan header dengan data
        $data = array_merge($data, $pasienWithNumbers);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->fromArray($data, null, 'A1');

        $writer = new Xlsx($spreadsheet);
        $fileName = 'pasien.xlsx';

        // Simpan file Excel ke dalam penyimpanan sementara
        $filePath = storage_path('app/' . $fileName);
        $writer->save($filePath);


        // Mengunduh file dan menghapusnya setelah selesai
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
}
