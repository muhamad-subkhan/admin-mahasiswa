@extends('layouts.app')

@section('body')
<h1 class="mb-2 text-decoration-underline">Edit Data Mahasiswa</h1>

<div>
    <form action="{{ route('daftar.update', $daftar->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Nama</label>
            <input type="text" name="nama" value="{{ $daftar->nama }}" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">NIM</label>
            <input type="text" name="nim" value="{{ $daftar->nim }}" class="form-control" id="exampleFormControlInput1" placeholder="Nomer NIM">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Jurusan</label>
            <input type="text" name="jurusan" value="{{ $daftar->jurusan }}" class="form-control" id="exampleFormControlInput1" placeholder="Jurusan">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Fakultas</label>
            <input type="text" name="fakultas" value="{{ $daftar->fakultas }}" class="form-control" id="exampleFormControlInput1" placeholder="Fakultas">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Total SKS</label>
            <input type="text" name="totalsks" value="{{ $daftar->totalsks }}" class="form-control" id="exampleFormControlInput1" placeholder="Total SKS Dalam 1 Semester">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">IPK (Indeks Presentasi Kumulatif)</label>
            <input type="text" name="ipk" value="{{ $daftar->ipk }}" class="form-control" id="exampleFormControlInput1" placeholder="Nilai IPK">
        </div>

        <div class="text-end">
                <button class="btn btn-primary px-5">Simpan</button>
        </div>
    </form>
</div>
@endsection