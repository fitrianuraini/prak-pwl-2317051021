@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <style>
        .card-mk {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-top: 6px solid #e95dafff;
        }

        h1 {
            color: #ff48bcff;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .btn-tambah {
            display: inline-block;
            background-color: #ff9eecff;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
            font-weight: 600;
        }

        .btn-tambah:hover {
            background-color: #ffb1f3ff;
            transform: translateY(-2px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 16px;
        }

        th {
            background-color: #fb74c3ff;
            color: white;
            padding: 12px;
            text-transform: uppercase;
            border: none;
        }

        td {
            background-color: #f9f5ff;
            padding: 10px;
            border-bottom: 2px solid #fcabe2ff;
        }

        tr:hover td {
            background-color: #fdf2f8;
        }

        .btn-edit {
            color: #ff35bcff;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-delete {
            background: none;
            color: #ff4b5c;
            border: none;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-delete:hover {
            text-decoration: underline;
        }
    </style>

    <div class="card-mk">
        <h1>📚 Daftar Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn-tambah">➕ Tambah Mata Kuliah Baru</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th> <!-- ✅ Tambahan dari gambar pertama -->
                </tr>
            </thead>
            <tbody>
                @foreach ($mks as $mk)
                <tr>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td> <!-- ✅ Tambahan dari gambar kedua -->
                        <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn-edit">Edit</a> |
                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
