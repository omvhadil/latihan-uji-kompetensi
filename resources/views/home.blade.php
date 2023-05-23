@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h5>Uji Kompetensi</h5>
            </div>
            <div class="card-body">
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <h4 class="fw-bold">Perpustakaan</h4>
                    <a href="/tambah">
                        <button class="btn btn-primary">Tambah <strong> +</strong></button>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-primary">
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Buku</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Deskription</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <img src="{{ asset('images/1684828849.png') }}" style="width: 50px">
                </div>
                </td>
                <td>Bumi Cinta</td>
                <td>Jason</td>
                <td>Pustaka</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit obcaecati quod asperiores,
                    et, ipsum accusamus vero totam debitis repellendus omnis!</td>
                <td class="d-inline-flex gap-1">
                    <button class="btn bg-success bg-opacity-50">✍</button>
                    <button class="btn bg-danger bg-opacity-50">🗑</button>
                </td>
                </tr>

                </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <h6>@fadilku</h6>
        </div>
    </div>
    </div>
    {{-- <div class="container">
        <header class="mb-5">
            <h1 class="fw-bold">Uji Kompetensi</h1>
        </header>
        <div class="card shadow-sm rounded-3 p-2">
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <h4 class="fw-bold">Data Siswa</h4>

                <button class="btn btn-success">Tambah data</button>
            </div>
            <div class="table-responsive">
                <table class="table table-borderless border-0 table-hover">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Hobi</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>#</td>
                            <td>Jason Statham</td>
                            <td>Amerika</td>
                            <td>10/9/1998</td>
                            <td>Laki-laki</td>
                            <td>Sepak bola, baca buku</td>
                            <td>jason@gmail.com</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
@endsection
