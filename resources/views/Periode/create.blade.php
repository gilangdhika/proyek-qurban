@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Periode Qurban</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('periode.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Tahun</label>
            <input type="number" name="tahun" class="form-control" value="{{ old('tahun') }}" required>
        </div>

        <div class="mb-3">
            <label>Jenis Tahun</label>
            <select name="jenis_tahun" class="form-control" required>
                <option value="Hijriyah">Hijriyah</option>
                <option value="Masehi">Masehi</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control" value="{{ old('tanggal_mulai') }}" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control" value="{{ old('tanggal_selesai') }}" required>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="aktif">Aktif</option>
                <option value="nonaktif">Nonaktif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('periode.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
