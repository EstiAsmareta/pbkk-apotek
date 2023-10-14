<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataObatController;

Route::get('/','dataObatController@index');
Route::get('/dataObat/create', 'dataObatController@create');
Route::get('/dataObat/{id_obat}', 'dataObatController@read');
Route::put('/dataObat/{id_obat}', 'dataObatController@update');
Route::delete('/dataObat/{id_obat}', 'dataObatController@delete');
