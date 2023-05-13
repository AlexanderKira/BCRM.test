<?php
//фасад
use Illuminate\Support\Facades\Route;
//контроллеры
use App\Http\Controllers\Posts\BlogController;

Route::get('blog', [BlogController::class, 'index'])->name('blog'); //получить
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show'); 
Route::post('blog/{post}/like', [BlogController::class, 'like'])->name('blog.like'); 
?>