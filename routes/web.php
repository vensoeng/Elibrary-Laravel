<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RangModelController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\closetnumController;
use App\Http\Controllers\floorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SaveplaylistController;
use App\Http\Controllers\userController;
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

Route::get('/',[userController::class,'index'])->name('homepage');
Route::get('/new',[userController::class,'new'])->name('new');
Route::get('/popular',[userController::class,'popular'])->name('popular');
Route::get('/playlist',[userController::class,'playlist'])->name('palylist');
Route::get('/playlist/{id}/infor',[userController::class,'palylistinfor'])->name('palylistinfor');
Route::get('/bookinfor/{id}/show',[userController::class, 'show'])->name('bookinfor');
// this is search rout 
Route::get('/search', [userController::class, 'search'])->name('search');
// --------------this is admin-----------------> 
Route::get('/admin', [adminController::class, 'index'])->name('admin');
//this is for rage
Route::post('admin/addRang',[RangModelController::class, 'store'])->name('addRang');
Route::get('/rage/{rangModel}/edit', [RangModelController::class, 'edit'])->name('editrang');
Route::put('/rage/{rangModel}/update',[RangModelController::class, 'update'])->name('updaterage');
//this is closetnum
Route::post('admin/addclosetnum',[closetnumController::class, 'store'])->name('addclosetnum');
Route::get('/closet/{closetnum}/edit',[closetnumController::class, 'edit'])->name('editclosetnum');
Route::put('/closet/{closetnum}/update',[closetnumController::class, 'update'])->name('updateclosetnum');
// this is for floor 
Route::post('admin/addfloor', [floorController::class,'store'])->name('addfloor');
Route::get('/floor/{floorModel}/edit', [floorController::class,'edit'])->name('editfloor');
Route::put('/floor/{floorModel}/update', [floorController::class,'update'])->name('updatefloor');
// this is book 
Route::post('admin/addbook', [BookController::class,'store'])->name('addbook');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('editbook');//show form for edit 
Route::put('/booksupdate/{book}/update', [BookController::class, 'update'])->name('bookupdate'); //rout update book
Route::delete('/booksdelete/{book}/delete', [BookController::class, 'destroy'])->name('bookdelete'); //rout detete book
//this Is playlist
Route::post('admin/addplaylist', [PlaylistController::class,'store'])->name('addplaylist');//this  is for store playlist
Route::get('/playlist/{playlist}/show', [PlaylistController::class, 'show'])->name('showplaylist');//This for show when playlist maked
Route::get('/playlist/{playlist}/edit', [PlaylistController::class, 'edit'])->name('editplaylist');//show form for edit
Route::put('/playlist/{playlist}/update', [PlaylistController::class, 'update'])->name('updateplaylist'); //rout update book
Route::delete('/playlist/{playlist}/delete', [PlaylistController::class, 'destroy'])->name('deleteplaylist'); //rout detete book
// this is for saveplaylist 
Route::post('admin/addlist', [SaveplaylistController::class,'store'])->name('addlist');//this is for add item to playlst
Route::delete('admin/deletelist/{saveplaylist}/delete', [SaveplaylistController::class,'destroy'])->name('deletelist');//this is for delete item from playlist