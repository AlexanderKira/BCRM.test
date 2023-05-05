<?php
//фасад
use Illuminate\Support\Facades\Route;
//контроллеры
use App\Http\Controllers\Posts\AdminController;

Route::prefix('admin')->middleware('auth','active', 'admin')->group(function(){
    Route::redirect('/', '/admin/posts')->name('admin');

    Route::get('posts', [AdminController::class, 'index'])->name('admin.posts'); //получить
    Route::get('/posts/create', [AdminController::class, 'create'])->name('admin.posts.create');//создать
    Route::post('/posts', [AdminController::class, 'store'])->name('admin.posts.store');//сохранить
    Route::get('/posts/{post}', [AdminController::class, 'show'])->name('admin.posts.show');//показать
    Route::get('/posts/{post}/edit', [AdminController::class, 'edit'])->name('admin.posts.edit');//редактировать
    Route::put('/posts/{post}', [AdminController::class, 'update'])->name('admin.posts.update');//обновить
    Route::delete('/posts/{post}', [AdminController::class, 'destroy'])->name('admin.posts.destroy');//удалить
//кастомный
    Route::post('/posts/{posts}/like', [AdminController::class, 'like'])->name('admin.posts.like');//поставить лайк

});


?>