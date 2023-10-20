<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
    // use HasFactory;
    protected $table = 'tbObat'; //nama tabel
    protected $fillable = [
        'id_obat',
        'nama_obat',
        'nama_produsen',
        'stok',
        'tgl_kadaluarsa',
        'harga',
        'keterangan',
        'id_rak',
        ]; //kolom yang dapat diisi
    
    // public function rak(){
    //     return $this->belongsTo(DataRak::class); //merelasikan tabel tbobat dan admin
    // }
}
