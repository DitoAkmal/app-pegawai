@extends('master')
@section('title', 'Edit Jabatan')
@section('content')
<h2>Edit Jabatan</h2>
<form action="{{ route('positions.update', $position->id) }}" method="POST">
    @csrf @method('PUT')
    <label>Nama Jabatan:</label>
    <input type="text" name="nama_jabatan" value="{{ $position->nama_jabatan }}" required>
    <label>Gaji Pokok:</label>
    <input type="number" name="gaji_pokok" value="{{ $position->gaji_pokok }}" required>
    <button type="submit">Update</button>
</form>
@endsection
