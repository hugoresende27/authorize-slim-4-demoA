<?php

use App\Support\Route;

Route::get('/welcome', 'WelcomeController@index');
Route::get('/welcome/{name}/{id}', 'WelcomeController@show');