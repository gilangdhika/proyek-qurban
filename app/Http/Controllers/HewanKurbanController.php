<?php

namespace App\Http\Controllers;

use App\Models\HewanKurban;
use Illuminate\Http\Request;

class HewanKurbanController extends Controller
{
    public function index()
    {
        $hewanKurbans = HewanKurban::with('periode')->get();
        return view('hewan.index', compact('hewanKurbans'));
    }

    public function create()
    {
        return view('hewan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_periode' => 'required|exists:periodes,id',
            'nama_hewan' => 'required|string|max:255',
            'jenis' => 'required|in:sapi,kambing,domba,kerbau',
            'harga' => 'required|numeric|min:0',
        ]);

        HewanKurban::create($validated);

        return redirect()->route('hewan.index')->with('success', 'Hewan kurban berhasil ditambahkan');
    }

    public function show($id)
    {
        $hewan = HewanKurban::with('periode')->findOrFail($id);
        return view('hewan.show', compact('hewan'));
    }

    public function edit($id)
    {
        $hewan = HewanKurban::findOrFail($id);
        return view('hewan.edit', compact('hewan'));
    }

    public function update(Request $request, $id)
    {
        $hewan = HewanKurban::findOrFail($id);

        $validated = $request->validate([
            'id_periode' => 'required|exists:periodes,id',
            'nama_hewan' => 'required|string|max:255',
            'jenis' => 'required|in:sapi,kambing,domba,kerbau',
            'harga' => 'required|numeric|min:0',
        ]);

        $hewan->update($validated);

        return redirect()->route('hewan.index')->with('success', 'Hewan kurban berhasil diperbarui');
    }

    public function destroy($id)
    {
        $hewan = HewanKurban::findOrFail($id);
        $hewan->delete();

        return redirect()->route('hewan.index')->with('success', 'Hewan kurban berhasil dihapus');
    }
}
