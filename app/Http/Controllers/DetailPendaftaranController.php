<?php

namespace App\Http\Controllers;

use App\Models\DetailPendaftaran;
use Illuminate\Http\Request;

class DetailPendaftaranController extends Controller
{
    public function index()
    {
        $details = DetailPendaftaran::with(['pendaftaran', 'hewan'])->get();
        return view('detail_pendaftaran.index', compact('details'));
    }

    public function create()
    {
        return view('detail_pendaftaran.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pendaftaran' => 'required|exists:pendaftarans,id',
            'id_hewan' => 'required|exists:hewan_kurbans,id',
            'jumlah' => 'required|numeric|min:1',
        ]);

        DetailPendaftaran::create($validated);

        return redirect()->route('detailpendaftaran.index')->with('success', 'Detail pendaftaran berhasil ditambahkan');
    }

    public function show($id)
    {
        $detail = DetailPendaftaran::with(['pendaftaran', 'hewan'])->findOrFail($id);
        return view('detail_pendaftaran.show', compact('detail'));
    }

    public function edit($id)
    {
        $detail = DetailPendaftaran::findOrFail($id);
        return view('detail_pendaftaran.edit', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $detail = DetailPendaftaran::findOrFail($id);

        $validated = $request->validate([
            'id_pendaftaran' => 'required|exists:pendaftarans,id',
            'id_hewan' => 'required|exists:hewan_kurbans,id',
            'jumlah' => 'required|numeric|min:1',
        ]);

        $detail->update($validated);

        return redirect()->route('detailpendaftaran.index')->with('success', 'Detail pendaftaran berhasil diperbarui');
    }

    public function destroy($id)
    {
        $detail = DetailPendaftaran::findOrFail($id);
        $detail->delete();

        return redirect()->route('detailpendaftaran.index')->with('success', 'Detail pendaftaran berhasil dihapus');
    }
}
