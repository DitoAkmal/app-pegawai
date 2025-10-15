@extends('master')
@section('title', 'Data Gaji')
@section('content')
<h2>Data Gaji Karyawan</h2>
<a href="{{ route('salaries.create') }}" class="btn">+ Tambah Gaji</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nama Karyawan</th>
        <th>Bulan</th>
        <th>Total Gaji</th>
        <th>Aksi</th>
    </tr>
    @foreach($salaries as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->employee->nama_lengkap ?? 'Tidak Ada' }}</td>
        <td>{{ $s->bulan }}</td>
        <td>{{ $s->total_gaji }}</td>
        <td>
            <a href="{{ route('salaries.edit', $s->id) }}" class="btn-edit">Edit</a>
            <form action="{{ route('salaries.destroy', $s->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" class="btn-delete" onclick="return confirm('Hapus data ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
