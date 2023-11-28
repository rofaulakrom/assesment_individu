<?php

namespace App\Http\Controllers;
use App\Models\KasirModel;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function view_kasir(Request $request) 
    {
        $data['kasirRecord'] = kasirModel::all();
        return view('backend.kasir.list', $data);
    }

    public function add_kasir(Request $request) 
    {
        return view('backend.kasir.add');
    }

    public function add_kasir_post(Request $request) 
    {
        $request->validate([
            'kodekasir' => 'required',
            'nama' => 'required',
            'hp' => 'required|numeric',
        ]);

        $insertRecord = new KasirModel;
        $insertRecord->kodekasir = trim($request->kodekasir);
        $insertRecord->nama = trim($request->nama);
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
