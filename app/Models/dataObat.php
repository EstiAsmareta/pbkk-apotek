<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataObat extends Model
{
    use HasFactory;
    protected $table = 'tbObat'; //nama tabel
    protected $fillable = [
        'id_obat',
        'nama_obat',
        'nama_produsen',
        'stok',
        'tgl_kadaluarsa',
        'harga',
        'keterangan',
        'id_admin',
        ]; //kolom yang dapat diisi
    
    public function category(){
        return $this->belongsTo(admin::class); //merelasikan tabel dtobat dan admin
    }
}
