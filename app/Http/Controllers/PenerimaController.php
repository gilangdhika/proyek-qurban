<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerima = Penerima::all();
        return view('penerima.index', compact('penerima'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerima.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string|max:15',
        ]);

        Penerima::create($validated);

        return redirect()->route('penerima.index')
            ->with('success', 'Penerima berhasil ditambahkan');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerima $penerima)
    {
        $penerima = Penerima::findOrFail($penerima->id);
        return view('penerima.edit', compact('penerima'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerima $penerima)
    {
        $penerima = Penerima::findOrFail($penerima->id);
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string|max:15',
        ]);

        $penerima->update($validated);

        return redirect()->route('penerima.index')
            ->with('success', 'Penerima berhasil diperbarui');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerima $penerima)
    {
        $penerima = Penerima::findOrFail($penerima->id);
        $penerima->delete();

        return redirect()->route('penerima.index')
            ->with('success', 'Penerima berhasil dihapus');
        //
    }
}
