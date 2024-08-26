<?php

use App\Http\Controllers\Account_Controller;
use App\Http\Controllers\CateogryController;
use App\Http\Controllers\ItemsController;
use Illuminate\Support\Facades\Route;

// Auth
Route::controller(Account_Controller::class)->group(function () {
    Route::get('/', 'login')->name("login")->middleware("guest");
    Route::post('/Register', 'Register')->name("Register");
    Route::post('/Login_user', 'Login_user')->name("Login_user");
});

// Cateogry
Route::controller(CateogryController::class)->group(function () {
    Route::get('/Catogry', 'index')->name("cat");
    Route::get('/AddNewCat', 'create')->name("add_cat");
    Route::post('/AddNewCat', 'store')->name("cat.store");
    Route::put('/AddNewCat', 'store')->name("cat.store");
    Route::delete('/de/{id}', 'destroy')->name("cat.destroy");
    Route::post('/search', 'search')->name("search");
    Route::get('/show/{id}', 'edit')->name("cat.show");
    Route::put('/show/{id}', 'update')->name("cat.update");
});

// Items
Route::controller(ItemsController::class)->group(function () {
    Route::get('/AddItems', 'create')->name("Add_Items");
    Route::post('/AddItems', 'store')->name("item.store");
});


Route::view('/homeDeshboard', 'Home')->name("home")->middleware("guest");
Route::view('/Branche', 'Branches.Branche')->name("Branch");
Route::view('/AddBranches', 'Branches.AddNewBranche')->name("Add_Branchs");
Route::view('/Empleoy', 'Empleoys.Empleoy')->name("Empleoy");
Route::view('/AddEmpleoys', 'Empleoys.AddNewEmpleoy')->name("Add_Empleoys");
Route::view('/Custmer', 'Custmers.Custmer')->name("Custmer");
Route::view('/AddCustmers', 'Custmers.AddNewCustmer')->name("Add_Custmers");
Route::view('/Inventory', 'Inventorys.Inventory')->name("Inventory");
Route::view('/AddInventorys', 'Inventorys.AddNewInventory')->name("Add_Inventorys");
Route::view('/Sales', 'Sales.Sales')->name("Sales");
Route::view('/Invoice', 'Sales.Invoice')->name("print");

Route::view('/purchases', 'purchases.purchases')->name("purchases");
Route::view('/GetAll_Invoice', 'purchases.GetAll_Invoice')->name("GetAll_Invoice");
Route::view('/Expenses', 'Expenses.AddExpenses')->name("Expenses");
Route::view('/GetAllExpenses', 'Expenses.Expenses')->name("getAllExpenses");
Route::view('/ReportExpenses/{start}/{end}', 'Expenses.repoart')->name("repoart");
Route::view('/AddNewResource', 'Resource.Add_New_Resource')->name("AddNewResource");
Route::view('/GetAllResource', 'Resource.GetAllResource')->name("GetAllResource");
Route::view('/Transfer', 'Transfer.Transfer')->name("Transfer");
Route::view('/GetAll_Transfer', 'Transfer.GetAll_Transfer')->name("GetAll_Transfer");
Route::view('/Addpromotonal', 'promotonal.Addpromotonal')->name("Addpromotonal");
Route::view('/GetAll_promotonal', 'promotonal.GetAll_promotonal')->name("GetAll_promotonal");

