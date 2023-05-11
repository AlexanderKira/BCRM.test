<?php
//фасад
use Illuminate\Support\Facades\Route;
//контроллеры
use App\Http\Controllers\Posts\LoginController;
use App\Http\Controllers\Posts\RegisterController;

Route::middleware('guest')->group(function(){
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('login', [LoginController::class, 'index'])->name('login'); //->withoutMiddleware('guest');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
});





?>