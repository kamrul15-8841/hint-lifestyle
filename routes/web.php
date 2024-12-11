<?php
//kamrul
use App\Http\Controllers\BinController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\RowController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ProductController;
//kamrul

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\ShellFabricController;
use App\Http\Controllers\OtherFabricController;
use App\Http\Controllers\FunctionalTrimController;
use App\Http\Controllers\ValueAdditionController;
use App\Http\Controllers\WashingController;
use App\Http\Controllers\StyleSummaryController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\PkgTrimController;
use App\Http\Controllers\DecorativeController;
use App\Http\Controllers\HangerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'pageIndex']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('/forgot-password', [LoginController::class, 'forgotPassword']);

Route::get('/dashboard', [DashboardController::class, 'pageIndex']);

//kamrul
Route::resource('bins', BinController::class);
Route::resource('colors', ColorController::class);
Route::resource('racks', RackController::class);
Route::resource('rows', RowController::class);
Route::resource('sizes', SizeController::class);
Route::resource('locations', LocationController::class);
Route::resource('products', ProductController::class);
//kamrul

Route::get('/style-details', [StyleController::class, 'pageIndex']);
Route::get('/style-details-create', [StyleController::class, 'create']);

Route::get('/shell-fabric', [ShellFabricController::class, 'pageIndex']);
Route::get('/shell-fabric-create', [ShellFabricController::class, 'create']);

Route::get('/other-fabric', [OtherFabricController::class, 'pageIndex']);
Route::get('/other-fabric-create', [OtherFabricController::class, 'create']);

Route::get('/functional-trim-cost', [FunctionalTrimController::class, 'pageIndex']);
Route::get('/functional-trim-cost-create', [FunctionalTrimController::class, 'create']);

Route::get('/pkg-trim-cost', [PkgTrimController::class, 'pageIndex']);
Route::get('/pkg-trim-cost-create', [PkgTrimController::class, 'create']);

Route::get('/decorative-trim-cost', [DecorativeController::class, 'pageIndex']);
Route::get('/decorative-trim-cost-create', [DecorativeController::class, 'create']);

Route::get('/hanger', [HangerController::class, 'pageIndex']);
Route::get('/hanger-create', [HangerController::class, 'create']);

Route::get('/value-addition', [ValueAdditionController::class, 'pageIndex']);
Route::get('/value-addition-create', [ValueAdditionController::class, 'create']);

Route::get('/washing', [WashingController::class, 'pageIndex']);
Route::get('/washing-create', [WashingController::class, 'create']);

Route::get('/style-summary', [StyleSummaryController::class, 'pageIndex']);
Route::get('/profile', [ProfileUserController::class, 'pageIndex']);
