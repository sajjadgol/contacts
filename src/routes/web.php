<?php

use Illuminate\Support\Facades\Route;

Route::get("test" , function(){
    return config('lara_guard.package_name');
});

