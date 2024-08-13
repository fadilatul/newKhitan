<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Terapi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TerapiController extends Controller
{
    public function index()
    {
        $terapigigi = Terapi::where('type', 'gigi')->get();
        $terapiumum = Terapi::where('type', 'umum')->get();
        // $terapigigi = Terapi::all();
        // $terapiumum = Terapi::all();
        // return view('terapi.index', compact('terapis'));
        return view('pages.terapi.index', compact('terapigigi', 'terapiumum'));
    }

    public function create()
    {
        return view('pages.terapi.tambah');
    }

    public function add(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'obat' => 'required'
        ], [
            'type.required' => 'Type Wajib Di isi',
            'name.required' => 'Name Wajib Di isi',
            'obat.required' => 'Obat Wajib Di isi',

        ]);

        $addTerapi = Terapi::create([
            'type' => $request->type,
            'name' => $request->name,
            'obat' => $request->obat,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($addTerapi) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }
        // return response()->json($addTerapi);

        return redirect('/terapi');
    }

    public function edit($id)
    {
        $terapi = Terapi::findOrFail($id);
        return view('pages.terapi.edit', compact('terapi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'obat' => 'required'
        ]);

        $terapi = Terapi::find($id);
        if (!$terapi) {
            return redirect('/terapi')->with('error', 'Data not found.');
        }

        $terapi->update($request->all());

        return redirect('/terapi')->with('success', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $terapi = Terapi::findOrFail($id);
        $terapi->delete();

        return redirect()->route('terapi');
    }
}
