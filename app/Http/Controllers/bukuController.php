<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Menampilkan semua buku
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    // Menyimpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'namaBuku'    => 'required|string|max:255',
            'namaPenulis' => 'required|string|max:255',
            'deskripsi'   => 'required|string|max:255',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')
                         ->with('success', 'Buku berhasil ditambahkan!');
    }

    // Menampilkan form edit buku
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    // Mengupdate data buku
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaBuku'    => 'required|string|max:255',
            'namaPenulis' => 'required|string|max:255',
            'deskripsi'   => 'required|string|max:255',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')
                         ->with('success', 'Buku berhasil diupdate!');
    }

    // Menghapus buku
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')
                         ->with('success', 'Buku berhasil dihapus!');
    }
}
