<?php

use Illuminate\Support\Facades\File;  // <--- Adicione esta linha
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Chamando rotas
foreach(File::allFiles(__DIR__.'/web') as $route_file){
    require $route_file->getPathname();
}

require __DIR__.'/auth.php';
