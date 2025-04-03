<?php

use App\Http\Controllers\Account_Controller;
use App\Http\Controllers\CateogryController;
use App\Http\Controllers\Cutomers_Controller;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\BranchsController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\PurchasesController;


Route::middleware(["guest"])->group(function () {

    // Auth
    Route::controller(Account_Controller::class)->group(function () {
        Route::get('/', 'login')->name("login");
        Route::post('/Register', 'Register')->name("Register");
        Route::post('/Login_user', 'Login_user')->name("Login_user");
    });

});
// Cateogry


Route::middleware(["auth"])->group(function () {
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
        Route::get('/items', 'index')->name("get_Items");
        Route::post('/AddItems', 'store')->name("item.store");
        Route::get('/items/{id}', 'edit')->name("item.edit");
        Route::put('/items/{id}', 'update')->name("item.update");
        Route::delete('/items/{id}', 'destroy')->name("item.destroy");

    });

    Route::view('/homeDeshboard', 'Home')->name("home");
    Route::controller(UnitsController::class)->group(function () {
        Route::get('/units', 'index')->name("units");
        Route::post('/units', 'store')->name("add.units");
        Route::put('/units', 'store')->name("edit.units");
        Route::delete('/units/{id}', 'destroy')->name("delete.units");

    });




    Route::resource('branches', BranchsController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('sales', SaleController::class);
    Route::post('/sales', [SaleController::class, 'store'])->name('sales.store');
    Route::get('/sales/{id}/invoice', [SaleController::class, 'showInvoice'])->name('sales.invoice');

    Route::resource('purchases', PurchasesController::class);
Route::post('/purchases', [PurchasesController::class, 'store'])->name('purchases.store');
Route::get('/purchases/{id}/invoice', [PurchasesController::class, 'showInvoice'])->name('purchases.invoice');


    // Route::view('/Branche', 'Branches.Branche')->name("Branch");
    // Route::view('/AddBranches', 'Branches.AddNewBranche')->name("Add_Branchs");
    Route::view('/Empleoy', 'Empleoys.Empleoy')->name("Empleoy");
    // Route::view('/AddEmpleoys', 'Empleoys.AddNewEmpleoy')->name("Add_Empleoys");
    Route::get('/Custmer', [Cutomers_Controller::class,"index"])->name("Custmer");
    Route::post('/Custmer', [Cutomers_Controller::class,"store"])->name("add.Custmer");
    Route::delete('/Custmer/{id}', [Cutomers_Controller::class,"destroy"])->name("delete.Custmer");
    Route::get('/Custmer/{id}', [Cutomers_Controller::class,"edit"])->name("show.Custmer");
    Route::put('/Custmer/{id}', [Cutomers_Controller::class,"update"])->name("edit.Custmer");
    Route::view('/AddCustmers', 'Custmers.AddNewCustmer')->name("Add_Custmers");
    Route::view('/Inventory', 'Inventorys.Inventory')->name("Inventory");
    Route::view('/AddInventorys', 'Inventorys.AddNewInventory')->name("Add_Inventorys");
    Route::view('/Sales', 'Sales.Sales')->name("Sales");
    Route::view('/Invoice', 'Sales.Invoice')->name("print");

    // Route::view('/GetAll_Invoice', 'purchases.GetAll_Invoice')->name("GetAll_Invoice");
    Route::view('/Expenses', 'Expenses.AddExpenses')->name("Expenses");
    Route::view('/GetAllExpenses', 'Expenses.Expenses')->name("getAllExpenses");
    Route::view('/ReportExpenses/{start}/{end}', 'Expenses.repoart')->name("repoart");
    Route::view('/AddNewResource', 'Resource.Add_New_Resource')->name("AddNewResource");
    Route::view('/GetAllResource', 'Resource.GetAllResource')->name("GetAllResource");
    Route::view('/Transfer', 'Transfer.Transfer')->name("Transfer");
    Route::view('/GetAll_Transfer', 'Transfer.GetAll_Transfer')->name("GetAll_Transfer");
    Route::view('/Addpromotonal', 'promotonal.Addpromotonal')->name("Addpromotonal");
    Route::view('/GetAll_promotonal', 'promotonal.GetAll_promotonal')->name("GetAll_promotonal");
Route::get("/logout",function(){
    Auth::logout();
    return redirect("/");
})->name("logout");
});
