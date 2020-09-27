<?php


//use App\Http\Controllers\AccountOpening;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/open-account', [AccountOpening::class, 'index']);

Route::get('/open-account', 'App\Http\Controllers\Web\AccountOpening@index');
