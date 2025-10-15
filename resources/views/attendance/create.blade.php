@extends('master')
@section('title', 'Tambah Absensi')
@section('content')
<h2>Tambah Absensi</h2>
<form action="{{ route('attendance.store') }}" method="POST">
    @csrf
    <label>Nama Karyawan:</label>
    <select name="karyawan_id" required>
        <option value="">Pilih Karyawan</option>
        @foreach($employees as $e)
            <option value="{{ $e->id }}">{{ $e->nama_lengkap }}</option>
        @endforeach
    </select>

    <label>Tanggal:</label>
    <input type="date" name="tanggal" required>

    <label>Status Absensi:</label>
    <select name="status_absensi" required>
        <option value="hadir">Hadir</option>
        <option value="izin">Izin</option>
        <option value="sakit">Sakit</option>
        <option value="alpha">Alpha</option>
    </select>

    <button type="submit">Simpan</button>
</form>
@endsection
