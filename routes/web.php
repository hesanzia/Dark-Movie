<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\PageController::class, 'index'])->name('dashboard');
Route::get('/actions/action',[\App\Http\Controllers\HomeController::class,'actions'])->name('action');
Route::get('/adventures/adventure',[\App\Http\Controllers\HomeController::class,'adventures'])->name('adventure');
Route::get('/animations/animation',[\App\Http\Controllers\HomeController::class,'animations'])->name('animation');
Route::get('/comedies/comedy',[\App\Http\Controllers\HomeController::class,'comedies'])->name('comedy');
Route::get('/crimes/crime',[\App\Http\Controllers\HomeController::class,'crimes'])->name('crime');
Route::get('/dramas/drama',[\App\Http\Controllers\HomeController::class,'dramas'])->name('drama');
Route::get('/horrors/horror',[\App\Http\Controllers\HomeController::class,'horrors'])->name('horror');
Route::get('/mysteries/mystery',[\App\Http\Controllers\HomeController::class,'mysteries'])->name('mystery');
Route::get('/romances/romance',[\App\Http\Controllers\HomeController::class,'romances'])->name('romance');
Route::get('/scienceFiction/sF',[\App\Http\Controllers\HomeController::class,'scienceFiction'])->name('sF');
Route::get('/serials/serial',[\App\Http\Controllers\HomeController::class,'serials'])->name('serial');
Route::get('/artists/male',[App\Http\Controllers\HomeController::class,'maleArtists'])->name('male');
Route::get('/artists/female',[App\Http\Controllers\HomeController::class,'femaleArtists'])->name('female');
Route::get('/search/search',[App\Http\Controllers\HomeController::class,'search'])->name('search');



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
