@extends('master')
@section('title', 'Edit Data Gaji')
@section('content')
<h2>Edit Data Gaji</h2>

<form action="{{ route('salaries.update', $salary->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Karyawan:</label>
    <select name="karyawan_id" required>
        @foreach($employees as $e)
            <option value="{{ $e->id }}" {{ $salary->karyawan_id == $e->id ? 'selected' : '' }}>
                {{ $e->nama_lengkap }}
            </option>
        @endforeach
    </select>

    <label>Bulan:</label>
    <input type="text" name="bulan" value="{{ $salary->bulan }}" required>

    <label>Gaji Pokok:</label>
    <input type="number" name="gaji_pokok" value="{{ $salary->gaji_pokok }}" required>

    <label>Tunjangan:</label>
    <input type="number" name="tunjangan" value="{{ $salary->tunjangan }}">

    <label>Potongan:</label>
    <input type="number" name="potongan" value="{{ $salary->potongan }}">

    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('salaries.index') }}">Kembali ke Data Gaji</a>
@endsection
