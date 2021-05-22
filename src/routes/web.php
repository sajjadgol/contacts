<?php

use Illuminate\Support\Facades\Route;

Route::get("test" , function(){
    return config('validation.package_name');
});


Route::get("test1" , function(){
    return "test1";
});
