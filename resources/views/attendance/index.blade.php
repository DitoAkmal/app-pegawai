@extends('master')
@section('title', 'Data Absensi')
@section('content')
<h2>Data Absensi</h2>
<a href="{{ route('attendance.create') }}" class="btn">+ Tambah Absensi</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nama Karyawan</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach($attendances as $a)
    <tr>
        <td>{{ $a->id }}</td>
        <td>{{ $a->employee->nama_lengkap ?? 'Tidak Ada' }}</td>
        <td>{{ $a->tanggal }}</td>
        <td>{{ $a->status_absensi }}</td>
        <td>
            <a href="{{ route('attendance.edit', $a->id) }}" class="btn-edit">Edit</a>
            <form action="{{ route('attendance.destroy', $a->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" class="btn-delete" onclick="return confirm('Hapus data ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
