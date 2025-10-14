@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <style>
        /* --- Card Form --- */
        .card-edit {
            background: white;
            padding: 30px 40px;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            border-top: 6px solid #ff5fcaff;
        }

        h1 {
            color: #ff28b0ff;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
        }

        label {
            font-weight: 600;
            color: #ff2991ff;
            display: block;
            margin-top: 10px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid #ff7bd5ff;
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
            font-size: 16px;
            margin-bottom: 15px;
        }

        input:focus {
            border-color: #fa3ab0ff;
            box-shadow: 0 0 5px rgba(249, 39, 200, 0.5);
        }

        .btn-submit {
            background-color: #fc84d0ff;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            transition: 0.3s;
            display: block;
            width: 100%;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #f979c6ff;
            transform: translateY(-2px);
        }

        a.btn-back {
            display: inline-block;
            margin-top: 15px;
            color: #fe4db7ff;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        a.btn-back:hover {
            color: #f979c6ff;
            text-decoration: underline;
        }

        /* --- Toast Notification --- */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1055;
        }

        .toast {
            background: #22c55e;
            color: white;
            padding: 12px 18px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            font-weight: 500;
            animation: fadeIn 0.3s ease, fadeOut 0.5s ease 3s forwards;
        }

        .toast.error {
            background: #ef4444;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeOut {
            to { opacity: 0; transform: translateY(-10px); }
        }
    </style>

    {{-- ✅ Notifikasi popup di kanan atas --}}
    @if (session('success') || session('error'))
    <div class="toast-container">
        @if (session('success'))
            <div class="toast" id="toast-msg">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="toast error" id="toast-msg">{{ session('error') }}</div>
        @endif
    </div>
    @endif

    <div class="card-edit">
        <h1>✏ Edit Mata Kuliah</h1>

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nama_mk">Nama Mata Kuliah:</label>
            <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required>

            <label for="sks">SKS:</label>
            <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" min="1" max="3" required>

            <button type="submit" class="btn-submit">💾 Simpan Perubahan</button>
        </form>

        <a href="{{ route('matakuliah.index') }}" class="btn-back">← Kembali ke Daftar</a>
    </div>
</div>

{{-- Script untuk auto-hilang setelah 3 detik --}}
<script>
    setTimeout(() => {
        const toast = document.querySelector('.toast');
        if (toast) toast.remove();
    }, 3500);
</script>
@endsection