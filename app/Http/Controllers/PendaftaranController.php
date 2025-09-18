<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    // Menampilkan daftar semua pendaftaran
    public function index()
    {
        $pendaftaran = Pendaftaran::with(['periode', 'detail.hewan'])->get();
        return view('admin.pendaftaran.index', compact('pendaftaran'));
    }

    // Menampilkan detail pendaftaran tertentu

    public function show($id)
{
    $pendaftaran = Pendaftaran::with(['user','periode','hewan'])->findOrFail($id);
    return view('admin.pendaftaran.detail', compact('pendaftaran'));
}

}

