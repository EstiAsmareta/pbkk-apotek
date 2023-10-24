<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataObat extends Model
{
    // use HasFactory;
    // protected $table = 'tbObat'; //nama tabel
    protected $fillable = [
        'obat_id',
        'nama_obat',
        'nama_produsen',
        'stok',
        'tgl_kadaluarsa',
        'harga',
        'keterangan',
        'rak_id',
        ]; //kolom yang dapat diisi
    
    public function DataRak(): BelongsTo
    {
        return $this->belongsTo(DataRak::class); //merelasikan tabel tbobat dan admin
    }
}
