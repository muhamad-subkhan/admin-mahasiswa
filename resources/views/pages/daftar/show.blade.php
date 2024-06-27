@extends('layouts.app')

@section('body')
<h1 class="mb-2 text-decoration-underline">Detail Mahasiswa</h1>

<div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="nama" name="nama" value="{{ $daftar->nama }}" class="form-control" id="exampleFormControlInput1" placeholder="Nama" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIM</label>
        <input type="text" name="nim" value="{{ $daftar->nim }}" class="form-control" id="exampleFormControlInput1" placeholder="Nomer NIM" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
        <input type="text" name="jurusan" value="{{ $daftar->jurusan }}" class="form-control" id="exampleFormControlInput1" placeholder="Jurusan" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fakultas</label>
        <input type="text" name="fakultas" value="{{ $daftar->fakultas }}" class="form-control" id="exampleFormControlInput1" placeholder="Fakultas" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Total SKS</label>
        <input type="text" name="totalsks" value="{{ $daftar->totalsks }}" class="form-control" id="exampleFormControlInput1" placeholder="Total SKS Dalam 1 Semester" readonly>
    </div>
    <div class="mb-5">
        <label for="exampleFormControlInput1" class="form-label">IPK (Indeks Presentasi Kumulatif)</label>
        <input type="text" name="ipk" value="{{ $daftar->ipk }}" class="form-control" id="exampleFormControlInput1" placeholder="Nilai IPK" readonly>
    </div>

    <div class="d-flex justify-content-between"">
        
            <div class=" bg-primary rounded px-5 text-white">
        <a href="{{ route('daftar.edit', $daftar->id) }}" type="button" class="btn mt-1 text-white">Edit</a>
    </div>
    <div class="btn btn-danger px-5 ">
        <form action="{{ route('daftar.destroy', $daftar->id) }}" method="POST" type="button" onsubmit="return confirm('Delete?')">
            @csrf
            @method('DELETE')
            <button class="btn m-0 text-white">Delete</button>
        </form>
    </div>

</div>
@endsection