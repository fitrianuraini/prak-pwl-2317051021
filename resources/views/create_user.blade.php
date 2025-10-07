@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-start py-5">
    <div class="card-custom p-5 shadow-lg rounded-4 mx-auto" style="max-width: 700px; width: 100%;">
        <h1 class="text-center mb-3 form-title">Form Pendaftaran Mahasiswa</h1>
        <p class="text-center mb-4 text-muted">Tambahkan Data Mahasiswa</p>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama</label>
                <input type="text" class="form-control rounded-pill" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label fw-semibold">NPM</label>
                <input type="text" class="form-control rounded-pill" id="npm" name="npm" placeholder="Masukkan NPM" required>
            </div>

            <div class="mb-4">
                <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                <select id="kelas_id" name="kelas_id" class="form-select rounded-pill" required>
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-gradient w-100 py-2 fs-5 fw-semibold shadow-sm">Simpan Pengguna</button>
        </form>
    </div>
</div>

<!-- Style -->
<style>
body {
    background: linear-gradient(135deg, #fce4ec, #f8bbd0, #f48fb1, #ec407a);
    font-family: 'Poppins', sans-serif;
}
.card-custom {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}
.form-title {
    font-weight: 700;
    background: linear-gradient(90deg, #d81b60, #f48fb1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.btn-gradient {
    background: linear-gradient(90deg, #d81b60, #f48fb1);
    border: none;
    color: #fff;
    border-radius: 50px;
    transition: 0.3s;
}
.btn-gradient:hover {
    background: linear-gradient(90deg, #fa5899ff, #ec407a);
}
</style>
@endsection
