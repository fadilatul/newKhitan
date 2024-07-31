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
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'jenis_paket' => 'required',
            'tempat' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ], [
            'name.required' => 'Nama Wajib Di isi',
            'tanggal.required' => 'Tanggal Daftar Wajib Di isi',
            'jam.required' => 'Jam Wajib Di isi',
            'jenis_paket.required' => 'Jenis Paket Wajib Di isi',
            'tempat.required' => 'Tempat Wajib Di isi',
            'alamat.required' => 'Alamat Wajib Di isi',
            'status.required' => 'Status Wajib Di isi'
        ]);

        $addKhitan = Khitan::create([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'jenis_paket' => $request->jenis_paket,
            'tempat' => $request->tempat,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($addKhitan) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }

        return redirect('/khitan');
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
            'tanggal' => 'required',
            'jam' => 'required',
            'jenis_paket' => 'required',
            'tempat' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        $khitan = Khitan::find($id);
        if (!$khitan) {
            return redirect('/khitan')->with('error', 'Data not found.');
        }

        $khitan->update($request->all());

        return redirect('/khitan')->with('success', 'Data updated successfully');
    }
}
