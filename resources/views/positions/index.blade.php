@extends('master')
@section('title', 'Data Jabatan')
@section('content')
<h2>Data Jabatan</h2>
<a href="{{ route('positions.create') }}" class="btn">+ Tambah Jabatan</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nama Jabatan</th>
        <th>Gaji Pokok</th>
        <th>Aksi</th>
    </tr>
    @foreach($positions as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nama_jabatan }}</td>
        <td>{{ $p->gaji_pokok }}</td>
        <td>
            <a href="{{ route('positions.edit', $p->id) }}" class="btn-edit">Edit</a>
            <form action="{{ route('positions.destroy', $p->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" class="btn-delete" onclick="return confirm('Hapus data ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
