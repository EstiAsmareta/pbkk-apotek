<?php

namespace App\Http\Controllers;

use App\Models\DataObat;
use Illuminate\Http\Request;

class DataObatController extends Controller
{

    public function index()
    {
        $DataObat = DataObat::all();
        return view('Obat.index', compact('DataObat'));
    }

    public function create()
    {
        return view('Obat.create');
    }

    public function read($obat_id)
    {
        $DataObat = DataObat::find($obat_id);
        if(!$DataObat){
            return response()->json(['massage'=>'Data tidak ditemukan'], 404);
        }

        return response()->json($DataObat);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(dataObat $DataObat)
    {
        //
    }
    
    public function edit(DataObat $obat_id)
    {
        $DataObat = DataObat::find($obat_id);
        return view('Obat.edit', compact('DataObat'));
    }

    public function update(Request $request, DataObat $obat_id)
    {
        $DataObat = DataObat::find($obat_id);
        if(!$DataObat){
            return response()->json(['massage'=>'Data tidak ditemukan'], 404);
        }

        $DataObat->update($request->all());
        return response()->json(['massage'=>'Data berhasil diperbarui']);
    }

    public function delete($obat_id)
    {
        $DataObat = dataObat::find($obat_id);
        if(!$DataObat){
            return response()->json(['massage'=>'Data Tidak ditemukan'],404);
        }

        $DataObat->delete();
        return response()->json(['massage'=>'Data berhasil dihapus']);
    }

    public function destroy(dataObat $DataObat)
    {
        //
    }
}
