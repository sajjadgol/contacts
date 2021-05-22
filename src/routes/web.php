<?php

use Illuminate\Support\Facades\Route;

Route::get("test" , function(){
    return config('validation.package_name');
});

