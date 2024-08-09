<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Diagnosa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DiagnosaController extends Controller
{
    public function index()
    {
        $diagnosas = Diagnosa::all();
        return view('pages.diagnosa.index', compact('diagnosas'));
    }

    public function create()
    {
        return view('pages.diagnosa.tambah');
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

        $addDiagnosa = Diagnosa::create([
            'type' => $request->type,
            'name' => $request->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($addDiagnosa) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }
        // return response()->json($addTerapi);

        return redirect('/diagnosa');
    }

    public function edit($id)
    {
        $diagnosa = Diagnosa::findOrFail($id);
        return view('pages.diagnosa.edit', compact('diagnosa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
        ]);

        $terapi = Diagnosa::find($id);
        if (!$terapi) {
            return redirect('/diagnosa')->with('error', 'Data not found.');
        }

        $terapi->update($request->all());

        return redirect('/diagnosa')->with('success', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $diagnosa = Diagnosa::findOrFail($id);
        $diagnosa->delete();

        return redirect()->route('diagnosa');
    }
}
