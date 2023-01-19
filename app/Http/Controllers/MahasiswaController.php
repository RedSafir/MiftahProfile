<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('table', compact('mahasiswa'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        mahasiswa::create($request->except("_token","submit"));
        return redirect("/main");
    }

    public function edit($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('edit', compact('mahasiswa'));
    }

    public function update($id, Request $request)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update($request->except("_token","submit"));
        return redirect("/main");
    }

    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect("/main");
    }
}
