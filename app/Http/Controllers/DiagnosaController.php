<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        $diagnosas = Diagnosa::all();
        return view('pages.diagnosa.index', compact('diagnosas'));
    }

    public function create()
    {
        return view('diagnosa.create');
    }

    public function store(Request $request)
    {
        $diagnosa = new Diagnosa();
        $diagnosa->name = $request->name;
        $diagnosa->description = $request->description;
        $diagnosa->save();

        return redirect()->route('diagnosa.index');
    }

    public function edit($id)
    {
        $diagnosa = Diagnosa::findOrFail($id);
        return view('diagnosa.edit', compact('diagnosa'));
    }

    public function update(Request $request, $id)
    {
        $diagnosa = Diagnosa::findOrFail($id);
        $diagnosa->name = $request->name;
        $diagnosa->description = $request->description;
        $diagnosa->save();

        return redirect()->route('diagnosa.index');
    }

    public function destroy($id)
    {
        $diagnosa = Diagnosa::findOrFail($id);
        $diagnosa->delete();

        return redirect()->route('diagnosa.index');
    }
}
