<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\PageController::class, 'index'])->name('dashboard');
Route::get('/categories/action',[\App\Http\Controllers\PageController::class,'actions'])->name('action');
Route::get('/categories/adventure',[\App\Http\Controllers\PageController::class,'adventures'])->name('adventure');
Route::get('/categories/animation',[\App\Http\Controllers\PageController::class,'animations'])->name('animation');
Route::get('/categories/comedy',[\App\Http\Controllers\PageController::class,'comedies'])->name('comedy');
Route::get('/categories/crime',[\App\Http\Controllers\PageController::class,'crimes'])->name('crime');
Route::get('/categories/drama',[\App\Http\Controllers\PageController::class,'dramas'])->name('drama');
Route::get('/categories/horror',[\App\Http\Controllers\PageController::class,'horrors'])->name('horror');
Route::get('/categories/mystery',[\App\Http\Controllers\PageController::class,'mysteries'])->name('mystery');
Route::get('/categories/romance',[\App\Http\Controllers\PageController::class,'romances'])->name('romance');
Route::get('/categories/sF',[\App\Http\Controllers\PageController::class,'scienceFiction'])->name('sF');
Route::get('/serials/serial',[\App\Http\Controllers\PageController::class,'serials'])->name('serial');
Route::get('/artists/male',[App\Http\Controllers\PageController::class,'maleArtists'])->name('male');
Route::get('/artists/female',[App\Http\Controllers\HomeController::class,'femaleArtists'])->name('female');
Route::get('/search/search',[App\Http\Controllers\PageController::class,'search'])->name('search');



Route::group(['middleware' =>'auth'],function (){

    Route::resource('movies' ,\App\Http\Controllers\MovieController::class);
    Route::resource('artists' ,\App\Http\Controllers\ArtistController::class);
    Route::resource('directors' ,\App\Http\Controllers\DirectorController::class);
    Route::resource('users' ,\App\Http\Controllers\UserController::class);
    Route::resource('billboards' ,\App\Http\Controllers\BillboardController::class);
    Route::resource('channels',\App\Http\Controllers\ChannelController::class);
    Route::resource('serials',\App\Http\Controllers\SerialController::class);
    Route::resource('links', \App\Http\Controllers\LinkController::class);
});
