<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Khitan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KhitanController extends Controller
{
    public function index()
    {
        $khitan = Khitan::orderBy('created_at', 'DESC')->get();
        return view('pages.khitan.index', compact('khitan'));
    }

    public function create()
    {
        return view('pages.khitan.tambah-khitan');
    }

    public function add(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string',
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'required|date',
            'alergi_obat' => 'nullable|string',
            'bakat_kloid' => 'nullable|string',
            'name_orangtua' => 'required|string',
            'nomer_hp' => 'nullable|string',
            'alamat' => 'required|string',
            'status' => 'required|in:selesai,belum',
            'biaya' => 'nullable|numeric',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'jenis_khitan' => 'required|in:konvensional,flash_couter,smart_klomp,cincin',
            'tempat' => 'required|in:gkz,rumah',
        ]);

        // Menambahkan data pasien
        $addKhitan = Khitan::create([
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'jenis_khitan' => $request->jenis_khitan,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alergi_obat' => $request->alergi_obat,
            'bakat_kloid' => $request->bakat_kloid,
            'name_orangtua' => $request->name_orangtua,
            'status' => $request->status,
            'nomer_hp' => $request->nomer_hp,
            'biaya' => $request->biaya,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'alamat' => $request->alamat,
        ]);

        if ($addKhitan) {
            session()->flash('success', 'Berhasil Menambahkan Data');
            return redirect('/khitan');
        } else {
            return redirect()->back()->withErrors('Gagal Menambahkan Data');
        }
    }

    public function hapus(Request $request)
    {
        Khitan::where('id', $request->id)->delete();
        return redirect('/khitan');
    }

    public function detail(Request $request)
    {
        $detail = Khitan::find($request->id);
        return view('pages.khitan.detail', compact('detail'));
    }
    public function edit($id)
    {
        $khitan = Khitan::find($id);
        if (!$khitan) {
            return redirect('/khitan')->with('error', 'Data not found.');
        }
        return view('pages.khitan.edit', compact('khitan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'name_orangtua' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'jenis_khitan' => 'required',
            'tempat' => 'required',
            'alamat' => 'required',
            'nomer_hp' => 'required',
            'biaya' => 'required|numeric',
            'status' => 'required',
        ]);

        $khitan = Khitan::find($id);
        if (!$khitan) {
            return redirect()->route('khitan')->with('error', 'Data tidak ditemukan.');
        }

        $khitan->update($request->all());

        return redirect()->route('khitan')->with('success', 'Data berhasil diperbarui.');
    }
}
