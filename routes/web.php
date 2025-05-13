<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome', ['posts' => Post::all()]);
})->name('home');

Route::post('/', function (Request $request) {
    dd($request->all());
});

Route::get('/create', [postcontroller::class, 'create']);

Route::post('/store', [postcontroller::class, 'ourstore'])->name('store');


Route::get('/Edit/{id}', [postcontroller::class, 'Editdata'])->name('Edit');

Route::post('/update/{id}', [postcontroller::class, 'updatedata'])->name('update');

Route::get('/Delete/{id}', [postcontroller::class, 'Deletedata'])->name('Delete');




