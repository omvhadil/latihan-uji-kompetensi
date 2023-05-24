<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return view('home', [
            'todos' => Todo::all()
        ]);
    }

public function create()
    {
        return view('create');
    }

public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'), $imageName);
        $data['foto'] = $imageName;
        Todo::create($data);

        return redirect('/');

    }
}