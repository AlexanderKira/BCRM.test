<?php
//фасады
use Illuminate\Support\Facades\Route;
//регистрируем контроллеры 
use App\Http\Controllers\Posts\AdminController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\Posts\PostController;
//маршруты

Route::view('/', 'home.index'); //главная страница
Route::redirect('/home', '/'); //переадресация 

