@extends('master')
@section('title', 'Tambah Gaji')
@section('content')
<h2>Tambah Data Gaji</h2>
<form action="{{ route('salaries.store') }}" method="POST">
    @csrf
    <label>Karyawan:</label>
    <select name="karyawan_id" required>
        <option value="">Pilih Karyawan</option>
        @foreach($employees as $e)
            <option value="{{ $e->id }}">{{ $e->nama_lengkap }}</option>
        @endforeach
    </select>

    <label>Bulan:</label>
    <input type="text" name="bulan" required>

    <label>Gaji Pokok:</label>
    <input type="number" name="gaji_pokok" required>

    <label>Tunjangan:</label>
    <input type="number" name="tunjangan" value="0">

    <label>Potongan:</label>
    <input type="number" name="potongan" value="0">

    <button type="submit">Simpan</button>
</form>
@endsection
