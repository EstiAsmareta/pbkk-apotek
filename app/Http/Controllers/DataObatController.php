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

    public function read($id_obat)
    {
        $DataObat = DataObat::find($id_obat);
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
    
    public function edit(DataObat $id_obat)
    {
        $DataObat = DataObat::find($id_obat);
        return view('Obat.edit', compact('DataObat'));
    }

    public function update(Request $request, DataObat $id_obat)
    {
        $DataObat = DataObat::find($id_obat);
        if(!$DataObat){
            return response()->json(['massage'=>'Data tidak ditemukan'], 404);
        }

        $DataObat->update($request->all());
        return response()->json(['massage'=>'Data berhasil diperbarui']);
    }

    public function delete($id_obat)
    {
        $DataObat = dataObat::find($id_obat);
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
