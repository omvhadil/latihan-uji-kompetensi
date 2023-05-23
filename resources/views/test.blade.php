@extends('layouts.app')
@section('content')
    <div class="container">
        <h5>page testing</h5>
        <form action="/tambah" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="judul" id="judul">
            <input type="text" name="deskripsi" id="deskripsi">
            <input type="file" name="foto" id="foto">
            <input type="submit" value="submit">
        </form>

        <ul>
            @foreach ($todos as $todo)
                <li>{{ $todo->judul }} - {{ $todo->deskripsi }} - <img
                        src="{{ asset('images/' . $todo->foto) }}
               " alt=""></li>
            @endforeach
        </ul>
    </div>
@endsection
