@extends('master')
@section('title', 'Tambah Jabatan')
@section('content')
<h2>Tambah Jabatan</h2>
<form action="{{ route('positions.store') }}" method="POST">
    @csrf
    <label>Nama Jabatan:</label>
    <input type="text" name="nama_jabatan" required>
    <label>Gaji Pokok:</label>
    <input type="number" name="gaji_pokok" required>
    <button type="submit">Simpan</button>
</form>
@endsection
