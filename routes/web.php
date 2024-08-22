<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'Home')->name("home");
Route::view('/AddItems', 'Items.Add_New_Items')->name("Add_Items");
Route::view('/Branche', 'Branches.Branche')->name("Branch");
Route::view('/AddBranches', 'Branches.AddNewBranche')->name("Add_Branchs");
Route::view('/Empleoy', 'Empleoys.Empleoy')->name("Empleoy");
Route::view('/AddEmpleoys', 'Empleoys.AddNewEmpleoy')->name("Add_Empleoys");
Route::view('/Sales', 'Sales.Sales')->name("Sales");
Route::view('/Invoice', 'Sales.Invoice')->name("print");
Route::view('/Catogry', 'Catogry.GetAllCat')->name("cat");
Route::view('/AddNewCat', 'Catogry.AddNewCat')->name("add_cat");
Route::view('/UpdateCat/{id}', 'Catogry.UpdateCat')->name("update_cat");
Route::view('/purchases', 'purchases.purchases')->name("purchases");
Route::view('/GetAll_Invoice', 'purchases.GetAll_Invoice')->name("GetAll_Invoice");
Route::view('/Expenses', 'Expenses.AddExpenses')->name("Expenses");
Route::view('/GetAllExpenses', 'Expenses.Expenses')->name("getAllExpenses");
Route::view('/ReportExpenses/{start}/{end}', 'Expenses.repoart')->name("repoart");

