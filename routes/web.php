<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




// admin prefix

Route::prefix('admin')->group(function(){
   
        
// memisahkan Route Admin
require __DIR__.'/__routes/admin.php';



});

Route::prefix('pengguna')->group(function(){
   
        
    // memisahkan Route Admin
    require __DIR__.'/__routes/pengguna.php';
    
    
    
    });