<?php

namespace App\Http\Controllers;

use App\Models\Pembagian;
use Illuminate\Http\Request;

class PembagianController extends Controller
{
    public function index()
    {
        $pembagians = Pembagian::with(['penerima', 'hewanKurban'])->get();
        return view('pembagian.index', compact('pembagians'));
    }

    public function create()
    {
        return view('pembagian.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_penerima' => 'required|exists:penerimas,id',
            'id_hewan_kurban' => 'required|exists:hewan_kurbans,id',
            'jumlah' => 'required|numeric|min:1',
        ]);

        Pembagian::create($validated);

        return redirect()->route('pembagian.index')->with('success', 'Pembagian berhasil ditambahkan');
    }

    public function show($id)
    {
        $pembagian = Pembagian::with(['penerima', 'hewanKurban'])->findOrFail($id);
        return view('pembagian.show', compact('pembagian'));
    }

    public function edit($id)
    {
        $pembagian = Pembagian::findOrFail($id);
        return view('pembagian.edit', compact('pembagian'));
    }

    public function update(Request $request, $id)
    {
        $pembagian = Pembagian::findOrFail($id);

        $validated = $request->validate([
            'id_penerima' => 'required|exists:penerimas,id',
            'id_hewan_kurban' => 'required|exists:hewan_kurbans,id',
            'jumlah' => 'required|numeric|min:1',
        ]);

        $pembagian->update($validated);

        return redirect()->route('pembagian.index')->with('success', 'Pembagian berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pembagian = Pembagian::findOrFail($id);
        $pembagian->delete();

        return redirect()->route('pembagian.index')->with('success', 'Pembagian berhasil dihapus');
    }
}
