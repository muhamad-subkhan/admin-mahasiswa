@extends('layouts.app')

@section('body')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Pendaftaran</h1>
    <a href="{{ route('daftar.create') }}" class="btn btn-primary">Add Pendaftaran</a>
</div>
<hr/>

@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
@endif

<table class="table table-hover">
    <thead class="table-primary">
        <tr class="bg-danger">
            <th class="border border-dark text-center">No</th>
            <th class="border border-dark text-center">Nama</th>
            <th class="border border-dark text-center">Nim</th>
            <th class="border border-dark text-center">Jurusan</th>
            <th class="border border-dark text-center">Fakultas</th>
            <th class="border border-dark text-center">Total SKS</th>
            <th class="border border-dark text-center">IPK</th>
        </tr>
    </thead>

    <tbody>
        @if($daftar->count() > 0)
            @foreach($daftar as $list)
                <tr>
                    <td class="align-middle border border-dark text-center">{{ $list->id }}</td>
                    <td class="align-middle border border-dark text-center">{{ $list->nama }}</td>
                    <td class="align-middle border border-dark text-center">{{ $list->nim }}</td>
                    <td class="align-middle border border-dark text-center">{{ $list->jurusan }}</td>
                    <td class="align-middle border border-dark text-center">{{ $list->fakultas }}</td>
                    <td class="align-middle border border-dark text-center">{{ $list->totalsks }}</td>
                    <td class="align-middle border border-dark text-center">{{ $list->ipk }}</td>
                    <td class="align-middle text-center"">
                    <a href="{{ route('daftar.show', $list->id) }}" type="button" class="btn btn-secondary">Detail</a>
                        <!-- <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('daftar.show', $list->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('daftar.edit', $list->id) }}" type="button" class="btn btn-warning">Edit</a>

                            <form action="{{ route('daftar.destroy', $list->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div> -->

                    </td>
                </tr>

            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Data Kosong</td>
            </tr>
        @endif

    </tbody>

</table>

@endsection