<?php

use Illuminate\Support\Facades\Route;


Route::get("/", function () {
    return view("home");
}); 
Route::get("/riwayat", function () {    
    return view("riwayat");
});

require __DIR__.'/settings.php';
