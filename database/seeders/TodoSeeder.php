<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todos = [
            [
                'judul' => 'Buku 1',
                'pengarang' => 'Pengarang 1',
                'penerbit' => 'Penerbit 1',
                'deskripsi' => 'Deskripsi 1',
            ],
            [
                'judul' => 'Buku 2',
                'pengarang' => 'Pengarang 2',
                'penerbit' => 'Penerbit 2',
                'deskripsi' => 'Deskripsi 2',
            ],
            [
                'judul' => 'Buku 3',
                'pengarang' => 'Pengarang 3',
                'penerbit' => 'Penerbit 3',
                'deskripsi' => 'Deskripsi 3',
            ],
            [
                'judul' => 'Buku 4',
                'pengarang' => 'Pengarang 4',
                'penerbit' => 'Penerbit 4',
                'deskripsi' => 'Deskripsi 4',
            ],
            [
                'judul' => 'Buku 5',
                'pengarang' => 'Pengarang 5',
                'penerbit' => 'Penerbit 5',
                'deskripsi' => 'Deskripsi 5',
            ],
            [
                'judul' => 'Buku 6',
                'pengarang' => 'Pengarang 6',
                'penerbit' => 'Penerbit 6',
                'deskripsi' => 'Deskripsi 6',
            ],
            [
                'judul' => 'Buku 7',
                'pengarang' => 'Pengarang 7',
                'penerbit' => 'Penerbit 7',
                'deskripsi' => 'Deskripsi 7',
            ],
            [
                'judul' => 'Buku 8',
                'pengarang' => 'Pengarang 8',
                'penerbit' => 'Penerbit 8',
                'deskripsi' => 'Deskripsi 8',
            ],
        ];
        foreach ($todos as $todo) {
            Todo::create($todo);
        }
    }
}