<?php

namespace App\Http\Controllers;

use App\Models\Terapi;
use Illuminate\Http\Request;

class TerapiController extends Controller
{
    public function index()
    {
        $terapis = Terapi::all();
        return view('terapi.index', compact('terapis'));
    }

    public function create()
    {
        return view('terapi.create');
    }

    public function store(Request $request)
    {
        $terapi = new Terapi();
        $terapi->name = $request->name;
        $terapi->description = $request->description;
        $terapi->save();

        return redirect()->route('terapi.index');
    }

    public function edit($id)
    {
        $terapi = Terapi::findOrFail($id);
        return view('terapi.edit', compact('terapi'));
    }

    public function update(Request $request, $id)
    {
        $terapi = Terapi::findOrFail($id);
        $terapi->name = $request->name;
        $terapi->description = $request->description;
        $terapi->save();

        return redirect()->route('terapi.index');
    }

    public function destroy($id)
    {
        $terapi = Terapi::findOrFail($id);
        $terapi->delete();

        return redirect()->route('terapi.index');
    }
}
