<?php

use App\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\User\UserDashboardComponent;
use App\Livewire\Admin\AdminDashboardComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);

Route::middleware(['auth'])->group(function(){
    Route::get('user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});


Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// require __DIR__.'/auth.php';
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
