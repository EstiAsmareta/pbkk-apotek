<?php

namespace App\Http\Controllers;

use App\Models\dataObat;
use Illuminate\Http\Request;

class dataObatController extends Controller
{

    public function index()
    {
        $dataObat = dataObat::all();
        return view('Obat.index', compact('dataObat'));
    }

    public function create()
    {
        return view('Obat.create');
    }

    public function read($id_obat)
    {
        $dataObat = dataObat::find($id_obat);
        if(!$dataObat){
            return response()->json(['massage'=>'Data tidak ditemukan'], 404);
        }

        return response()->json($dataObat);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(dataObat $dataObat)
    {
        //
    }
    
    public function edit(dataObat $id_obat)
    {
        $dataObat = dataObat::find($id_obat);
        return view('Obat.edit', compact('dataObat'));
    }

    public function update(Request $request, dataObat $id_obat)
    {
        $dataObat = dataObat::find($id_obat);
        if(!$dataObat){
            return response()->json(['massage'=>'Data tidak ditemukan'], 404);
        }

        $dataObat->update($request->all());
        return response()->json(['massage'=>'Data berhasil diperbarui']);
    }

    public function delete($id_obat)
    {
        $dataObat = dataObat::find($id_obat);
        if(!$dataObat){
            return response()->json(['massage'=>'Data Tidak ditemukan'],404);
        }

        $dataObat->delete();
        return response()->json(['massage'=>'Data berhasil dihapus']);
    }

    public function destroy(dataObat $dataObat)
    {
        //
    }
}
