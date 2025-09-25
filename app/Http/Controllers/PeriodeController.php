<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodes = Periode::all();
        return view('periode.index', compact('periodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('periode.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required|integer',
            'jenis_tahun' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        Periode::create($validated);
        return redirect()->route('periodes.index')
                         ->with('success', 'Periode berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periode $periode)
    {
        $periode = Periode::findOrFail($periode->id);
        return view('periode.edit', compact('periode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $periode)
    {
        $periode = Periode::findOrFail($periode->id);

        $validated = $request->validate([
            'tahun' => 'required|integer',
            'jenis_tahun' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after:tanggal_mulai',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        $periode->update($validated);

        return redirect()->route('periodes.index')
                         ->with('success', 'Periode berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periode $periode)
    {
        $periode = Periode::findOrFail($periode->id);
        $periode->delete(); 

        return redirect()->route('periodes.index')
                         ->with('success', 'Periode berhasil dihapus');

    }
}
