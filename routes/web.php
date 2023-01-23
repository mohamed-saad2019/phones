<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\CustomAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhonesController;
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
// Route For Change Lang AR ,EN
Route::get('welcome/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }
    session::Put('locale', $locale);
    return redirect()->back();
});


// Route url
Route::get('/', [CustomAuthController::class, 'index'])->name('login');

Route::post('/', [CustomAuthController::class, 'PostLogin'])->name('login');
Route::middleware(['auth:web'])->group(function () {
    Route::get('/logout', [CustomAuthController::class, 'signOut'])->name('logout');
    Route::get('/home',  [DashboardController::class, 'home']); 
    Route::get('/phones',  [PhonesController::class, 'index'])->name('PhoneList'); 
    Route::get('/phones/upload',  [PhonesController::class, 'upload'])->name('upload'); 
    Route::get('/phones/export',  [PhonesController::class, 'export'])->name('export'); 
    Route::Post('/phones/upload',  [PhonesController::class, 'uploadStore'])->name('uploadStore'); 
    Route::get('/phones/download/simple', function () {
        return Storage::download('public/simple.xlsx');
    });
});

// Route Dashboards 
