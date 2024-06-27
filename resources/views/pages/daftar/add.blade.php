@extends('layouts.app')

@section('body')

<h1 class="mb-2 text-decoration-underline">Form Pendaftaran</h1>

<div>
    <form action="{{ route('daftar.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" id="exampleFormControlInput1" placeholder="Nomer NIM">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="exampleFormControlInput1" placeholder="Jurusan">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Fakultas</label>
            <input type="text" name="fakultas" class="form-control" id="exampleFormControlInput1" placeholder="Fakultas">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Total SKS</label>
            <input type="text" name="totalsks" class="form-control" id="exampleFormControlInput1" placeholder="Total SKS Dalam 1 Semester">
        </div>
        <div class="mb-5">
            <label for="exampleFormControlInput1" class="form-label">IPK (Indeks Presentasi Kumulatif)</label>
            <input type="text" name="ipk" class="form-control" id="exampleFormControlInput1" placeholder="Nilai IPK">
        </div>
        <div class="text-end">
                <button class="btn btn-primary px-5">Simpan</button>
        </div>
    </form>
</div>
        @endsection