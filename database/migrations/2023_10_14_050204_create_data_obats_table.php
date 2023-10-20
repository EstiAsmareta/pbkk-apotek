<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_obats', function (Blueprint $table) {
            $table->string('id_obat',6)->primary();
            $table->bigInteger('rak_id');
            $table->string('nama_obat');
            $table->string('nama_produsen'); 
            $table->integer('stok');
            $table->date('tgl_kadaluarsa');
            $table->integer('harga'); // contoh ukuran (10, 2), sesuaikan dengan kebutuhan
            $table->text('keterangan'); //tambahkan nullable() jika ingin mengizinkan kolom keterangan kosong
            // $table->timestamps(); ini akan menambahkan kolom created_at dan updated_at secara otomatis
        });

        Schema::table('data_obats', function (Blueprint $table){
            $table->foreign('rak_id')->references('id')->on('data_raks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_obats');
    }
};
