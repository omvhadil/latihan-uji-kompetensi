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

        if($request->foto){
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $imageName);
            $data['foto'] = $imageName;
        }
        Todo::create($data);

        return redirect()->route('home');


    }

public function edit(Todo $todo)
    {
        return view('edit', [
            'todo' => $todo
        ]);
    }

    public function update(Request $request, Todo $todo)
    {
        $data = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if($request->hasFile('foto')){
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $imageName);
            $data['foto'] = $imageName;
        }

        $todo->update($data);

        return redirect()->route('home');
    }

public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('home');
    }

}