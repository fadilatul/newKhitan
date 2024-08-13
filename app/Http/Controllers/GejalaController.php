<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GejalaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('pages.gejala.index', compact('gejalas'));
    }

    public function create()
    {
        return view('pages.gejala.create');
    }

    public function add(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
        ], [
            'type.required' => 'Type Wajib Di isi',
            'name.required' => 'Name Wajib Di isi',

        ]);

        $addGejala = Gejala::create([
            'type' => $request->type,
            'name' => $request->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($addGejala) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }
        // return response()->json($addGejala);

        return redirect('/gejala');
    }

    public function edit($id)
    {
        $gejala = Gejala::findOrFail($id);
        return view('pages.gejala.edit', compact('gejala'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
        ]);

        $gejala = Gejala::find($id);
        if (!$gejala) {
            return redirect('/gejala')->with('error', 'Data not found.');
        }

        $gejala->update($request->all());

        return redirect('/gejala')->with('success', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();

        return redirect()->route('gejala');
    }
}
