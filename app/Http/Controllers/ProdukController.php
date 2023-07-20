<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Produk::all();
        return view('produk.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produk::create(
            [
                'produk_id_gol' => $request->produk_id_gol,
                'produk_id_user' => $request->produk_id_user,
                'produk_no' => $request->produk_no,
                'produk_nama' => $request->produk_nama,
                'produk_harga' => $request->produk_harga,
                'produk_stok' => $request->produk_stok,
                'produk_keterangan' => $request->produk_keterangan
            ]
        );

        return redirect('produk')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Produk::findOrFail($id);
        return view('produk.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Produk::findOrFail($id);
        $row->update(
            [
                'produk_id_gol' => $request->produk_id_gol,
                'produk_id_user' => $request->produk_id_user,
                'produk_no' => $request->produk_no,
                'produk_nama' => $request->produk_nama,
                'produk_harga' => $request->produk_harga,
                'produk_stok' => $request->produk_stok,
                'produk_keterangan' => $request->produk_keterangan
            ]
        );
        return redirect('produk')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Produk::findOrFail($id);
        $row->delete();

        return redirect('produk')->with('success', 'Data berhasil dihapus');
    }
}
