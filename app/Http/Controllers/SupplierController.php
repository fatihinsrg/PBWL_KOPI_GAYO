<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Supplier::all();
        return view('supplier.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'alamat_supplier' => $request->alamat_supplier,
            'nomor_hp_supplier' => $request->nomor_hp_supplier,
            'email_supplier' => $request->email_supplier
        ]);

        return redirect('supplier');
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
        $row = Supplier::findOrFail($id);
        return view('supplier.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Supplier::findOrFail($id);
        $row->update([
            'nama_supplier' => $request->nama_supplier,
            'alamat_supplier' => $request->alamat_supplier,
            'nomor_hp_supplier' => $request->nomor_hp_supplier,
            'email_supplier' => $request->email_supplier
        ]);

        return redirect('supplier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Supplier::findOrFail($id);
        $row->delete();

        return redirect('supplier');
    }
}
