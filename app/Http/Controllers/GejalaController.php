<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $gejala = new Gejala();
        $gejala->name = $request->name;
        $gejala->description = $request->description;
        $gejala->save();

        return redirect()->route('gejala.index');
    }

    public function edit($id)
    {
        $gejala = Gejala::findOrFail($id);
        return view('gejala.edit', compact('gejala'));
    }

    public function update(Request $request, $id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->name = $request->name;
        $gejala->description = $request->description;
        $gejala->save();

        return redirect()->route('gejala.index');
    }

    public function destroy($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();

        return redirect()->route('gejala.index');
    }
}
