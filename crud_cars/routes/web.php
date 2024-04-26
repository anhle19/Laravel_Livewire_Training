<?php

use App\Livewire\AddCar;
use App\Livewire\Carlist;
use App\Livewire\EditCar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', Carlist::class);
Route::get('/cars/add', AddCar::class);
Route::get('/cars/edit/{id}', EditCar::class);
