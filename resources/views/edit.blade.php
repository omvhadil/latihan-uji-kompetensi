@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card p-3 border-0 shadow-sm mt-4 mx-auto" style="width: 600px">
            <div class="card-header bg-transparent border-0">
                <h4 class="fw-bold text-center">Tambah Data</h4>
            </div>
            <form action="/edit/{{ $todo->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" id="exampleInputEmail1"
                        value="{{ $todo->judul }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" name="pengarang" id="exampleInputEmail1"
                        value="{{ $todo->pengarang }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" id="exampleInputEmail1"
                        value="{{ $todo->penerbit }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Desription</label>
                    <input type="text" class="form-control" name="deskripsi" id="exampleInputEmail1"
                        value="{{ $todo->deskripsi }}" aria-describedby="emailHelp">
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="foto" id="inputGroupFile02">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
