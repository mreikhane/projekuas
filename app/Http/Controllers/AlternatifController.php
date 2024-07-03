<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::orderBy('created_at', 'DESC')->get();

        return view('alternatifs.index', compact('alternatif'));
    }
    
    public function create()
    {
        return view('alternatifs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'fasilitas' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'keamanan' => 'required|string|max:255',
            'kebersihan' => 'required|string|max:255',
            'jarak' => 'required|string|max:255',
        ]);

        Alternatif::create($request->all());

        return redirect()->route('alternatifs.index')->with('success', 'Alternatif berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $alternatif = Alternatif::findOrFail($id);

        return view('alternatifs.show', compact('alternatif'));
    }

    public function edit(string $id)
    {
        $alternatif = Alternatif::findOrFail($id);

        return view('alternatifs.edit', compact('alternatif'));
    }

    public function update(Request $request, string $id)
    {
    $request->validate([
        'nama' => 'required|string|max:255',
        'kode' => 'required|string|max:255',
        'fasilitas' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'keamanan' => 'required|string|max:255',
            'kebersihan' => 'required|string|max:255',
            'jarak' => 'required|string|max:255',
    ]);

    // Debugging data yang diterima
    dd($request->all());

    $alternatif = Alternatif::findOrFail($id);
    $alternatif->update($request->all());

    return redirect()->route('alternatifs.index')->with('success', 'Alternatif berhasil diperbarui');
    }



    public function destroy(string $id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->delete();

        return redirect()->route('alternatifs.index')->with('success', 'Alternatif berhasil dihapus');
    }
}
