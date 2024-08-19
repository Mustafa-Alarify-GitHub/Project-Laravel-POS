<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'Home')->name("home");
Route::view('/AddItems', 'Items.Add_New_Items')->name("Add_Items");
Route::view('/Sales', 'Sales.Sales')->name("Sales");
Route::view('/Invoice', 'Sales.Invoice')->name("print");
Route::view('/Catogry', 'Catogry.GetAllCat')->name("cat");
Route::view('/AddNewCat', 'Catogry.AddNewCat')->name("add_cat");
Route::view('/UpdateCat/{id}', 'Catogry.UpdateCat')->name("update_cat");
Route::view('/purchases', 'purchases.purchases')->name("purchases");

