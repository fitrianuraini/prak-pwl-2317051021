@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#FCE7F3] py-8"> 
    <div class="w-full max-w-4xl mx-auto">
        <h1 class="text-center text-3xl font-bold mb-6 bg-gradient-to-r from-pink-400 to-pink-200 text-transparent bg-clip-text">
            Daftar Mahasiswa Ilmu Komputer
        </h1>

        <!-- Tombol Tambah Pengguna -->
        <div style="text-align:right; margin-bottom:1rem;">
            <a href="{{ route('user.create') }}" 
               class="btn btn-success"
               style="background:linear-gradient(90deg,#f9a8d4,#fbcfe8); 
                      color:#9d174d; 
                      padding:0.5rem 1.2rem; 
                      border-radius:6px; 
                      text-decoration:none; 
                      font-weight:600;">
                + Tambahkan User
            </a>
        </div>

        <!-- Tabel dengan warna pink muda -->
        <div class="bg-gradient-to-r from-pink-200 to-pink-50 rounded-lg shadow overflow-hidden">
            @include('component/user_table', ['users' => $users])
        </div>
    </div>
</div>
@endsection
