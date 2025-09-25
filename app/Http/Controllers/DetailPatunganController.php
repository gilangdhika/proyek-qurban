<?php

namespace App\Http\Controllers;

use App\Models\DetailPatungan;
use Illuminate\Http\Request;

class DetailPatunganController extends Controller
{
    public function index()
    {
        $patungans = DetailPatungan::with(['pendaftaran', 'hewan'])->get();
        return view('detail_patungan.index', compact('patungans'));
    }

    public function create()
    {
        return view('detail_patungan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pendaftaran' => 'required|exists:pendaftarans,id',
            'id_hewan' => 'required|exists:hewan_kurbans,id',
            'porsi' => 'required|numeric|min:1|max:7',
        ]);

        DetailPatungan::create($validated);

        return redirect()->route('detailpatungan.index')->with('success', 'Detail patungan berhasil ditambahkan');
    }

    public function show($id)
    {
        $patungan = DetailPatungan::with(['pendaftaran', 'hewan'])->findOrFail($id);
        return view('detail_patungan.show', compact('patungan'));
    }

    public function edit($id)
    {
        $patungan = DetailPatungan::findOrFail($id);
        return view('detail_patungan.edit', compact('patungan'));
    }

    public function update(Request $request, $id)
    {
        $patungan = DetailPatungan::findOrFail($id);

        $validated = $request->validate([
            'id_pendaftaran' => 'required|exists:pendaftarans,id',
            'id_hewan' => 'required|exists:hewan_kurbans,id',
            'porsi' => 'required|numeric|min:1|max:7',
        ]);

        $patungan->update($validated);

        return redirect()->route('detailpatungan.index')->with('success', 'Detail patungan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $patungan = DetailPatungan::findOrFail($id);
        $patungan->delete();

        return redirect()->route('detailpatungan.index')->with('success', 'Detail patungan berhasil dihapus');
    }
}
