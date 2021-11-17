<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UcapanController;
use App\http\Controllers\HomeController;
use App\http\Controllers\InventoryController;
use App\http\Controllers\ProfileController;
use App\http\Controllers\AboutController;
use App\Models\Home;
use App\Models\Inventory;
use App\Models\Profile;
use App\Models\About;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//first route
Route::get("/hello", function (){
    return "Hello World !";
});

Route::get("/welcome",[UcapanController::class, "sayHello"]);
Route::get("/bye",[UcapanController::class, "sayBye"]);

//route home
Route::get('/home', [HomeController::class, "indexhome"]);
Route::get('/home/{link}', [HomeController::class, "showhome"]);

//route inventory
Route::get('/inventory', [InventoryController::class, "indexinventory"]);
Route::get('/inventory/{link}', [InventoryController::class, "showinventory"]);

//route profile
Route::get('/profile', [ProfileController::class, "indexprofile"]);
Route::get('/profile/{link}', [ProfileController::class, "showprofile"]);

//route about
Route::get('/about', [AboutController::class, "indexabout"]);
Route::get('/about/{link}', [AboutController::class, "showabout"]);