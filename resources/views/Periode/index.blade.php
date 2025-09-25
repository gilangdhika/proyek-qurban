@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Periode Qurban</h2>

    <a href="{{ route('periode.create') }}" class="btn btn-primary mb-3">+ Tambah Periode</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tahun</th>
                <th>Jenis Tahun</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($periodes as $periode)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $periode->tahun }}</td>
                    <td>{{ $periode->jenis_tahun }}</td>
                    <td>{{ $periode->tanggal_mulai }}</td>
                    <td>{{ $periode->tanggal_selesai }}</td>
                    <td>{{ $periode->status }}</td>
                    <td>
                        <a href="{{ route('periode.edit', $periode->id_periode) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('periode.destroy', $periode->id_periode) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus periode ini?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">Belum ada data periode</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
