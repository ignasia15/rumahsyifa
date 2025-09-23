<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::paginate(10);
        return view('layanans.index', compact('layanans'));
    }

    public function create()
    {
        return view('layanans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        $layanan = new Layanan($request->all());

        // upload gambar
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('layanan', 'public');
            $layanan->gambar = $path;
        }

        $layanan->save();

        return redirect()->route('layanans.index')->with('success', 'Layanan berhasil ditambahkan');
    }

    public function edit(Layanan $layanan)
    {
        return view('layanans.edit', compact('layanan'));
    }

    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        $layanan->update($request->all());

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('layanan', 'public');
            $layanan->gambar = $path;
            $layanan->save();
        }

        return redirect()->route('layanans.index')->with('success', 'Layanan berhasil diperbarui');
    }

    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('layanans.index')->with('success', 'Layanan berhasil dihapus');
    }
}
