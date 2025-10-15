@extends('master')
@section('title', 'Data Departemen')
@section('content')
<h2>Data Departemen</h2>
<a href="{{ route('departments.create') }}" class="btn">+ Tambah Departemen</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nama Departemen</th>
        <th>Aksi</th>
    </tr>
    @foreach($departments as $d)
    <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->nama_departemen }}</td>
        <td>
            <a href="{{ route('departments.edit', $d->id) }}" class="btn-edit">Edit</a>
            <form action="{{ route('departments.destroy', $d->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" class="btn-delete" onclick="return confirm('Hapus data ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
