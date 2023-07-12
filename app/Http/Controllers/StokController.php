<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Supplier;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Stok::with('supplier')->get();
        return view('stok.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rowsSupplier = Supplier::all();
        return view('stok.create', compact('rowsSupplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Stok::create([
            'nama_stok' => $request->nama_stok,
            'harga_stok' => $request->harga_stok,
            'jumlah_stok' => $request->jumlah_stok,
            'deskripsi_stok' => $request->deskripsi_stok,
            'stok_id_supplier' => $request->stok_id_supplier
        ]);

        return redirect('stok');
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
        $row = Stok::findOrFail($id);
        return view('stok.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Stok::findOrFail($id);
        $row->update([
            'nama_stok' => $request->nama_stok,
            'harga_stok' => $request->harga_stok,
            'jumlah_stok' => $request->jumlah_stok,
            'deskripsi_stok' => $request->deskripsi_stok
        ]);

        return redirect('stok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Stok::findOrFail($id);
        $row->delete();

        return redirect('stok');
    }
}
