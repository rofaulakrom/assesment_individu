<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangNotaModel;

class BarangNotaController extends Controller
{
    public function view_Barang_nota(Request $request) 
    {
        $data['barangRecord'] = BarangNotaModel::all();
        return view('backend.barang.list', $data);
    }

    public function add_barang(Request $request) 
    {
        return view('backend.barang.add');
    }

    public function add_barang_post(Request $request) 
    {
        $request->validate([
            'namabarang' => 'required',
            'kodebarang' => 'required',
            'satuan' => 'required',
            'hargasatuan' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $insertRecord = new BarangModel;
        $insertRecord->kodebarang = trim($request->kodebarang);
        $insertRecord->namabarang = trim($request->namabarang);
        $insertRecord->satuan = trim($request->satuan);
        $insertRecord->hargasatuan = trim($request->hargasatuan);
        $insertRecord->stok = trim($request->stok);
        $insertRecord->save();

        return redirect('barang')->with('success', 'Barang created successfully');
    }

    public function edit_barang($id, Request $request)
    {
        $data['barangRecord'] = BarangModel::find($id);
        return view('barang.edit', $data);
    }

    public function edit_barang_post($id, Request $request)
    {
        $request->validate([
            'namabarang' => 'required',
            'satuan' => 'required',
            'hargasatuan' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $updateRecord = BarangModel::find($id);
        $updateRecord->namabarang = trim($request->namabarang);
        $updateRecord->satuan = trim($request->satuan);
        $updateRecord->hargasatuan = trim($request->hargasatuan);
        $updateRecord->stok = trim($request->stok);
        $updateRecord->save();

        return redirect()->route('backend.barang.list')->with('success', 'Barang edited successfully');
    }

    public function delete_barang($id)
    {
        BarangModel::where('id', $id)->delete(); 
        return redirect('barang')->with('success', 'Barang has been deleted'); 
    }
}
