<?php
//фасад
use Illuminate\Support\Facades\Route;
//контроллеры
use App\Http\Controllers\Posts\PostController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\TestController;

Route::prefix('user')->middleware('active')->group(function(){
    Route::redirect('/', '/user/posts')->name('user');

    Route::get('posts', [PostController::class, 'index'])->name('user.posts'); //получить
    Route::get('/posts/create', [PostController::class, 'create'])->name('user.posts.create');//создать
    Route::post('/posts', [PostController::class, 'store'])->name('user.posts.store');//сохранить
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('user.posts.show');//показать
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');//редактировать
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('user.posts.update');//обновить
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('user.posts.destroy');//удалить
//кастомный
    Route::post('/posts/{posts}/like', [PostController::class, 'like'])->name('user.posts.like');//поставить лайк

});

    Route::resource('posts/{post}/comments', CommentController::class);//все ресурсы для комментария
    Route::get('test', TestController::class)->name('test');
?>