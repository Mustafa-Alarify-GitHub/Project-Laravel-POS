<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'Home')->name("home");
Route::view('/AddItems', 'Add_New_Items')->name("Add_Items");
Route::view('/Sales', 'Sales')->name("Sales");

