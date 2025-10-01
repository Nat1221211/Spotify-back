<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\ListsSongsController;
use App\Http\Controllers\AlbumArtistController;
use App\Http\Controllers\ArtistSongsController;

Route::get ('/artists', [ArtistController::class, 'index']);
Route::post ('/artists', [ArtistController::class, 'store']);
Route::post ('/artists/{artist}', [ArtistController::class, 'update']);
Route::delete('/artists/{artist}', [ArtistController::class, 'destroy']);

Route::get ('/users', [UserController::class, 'index']);
Route::post ('/users', [UserController::class, 'store']);
Route::post ('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

Route::get ('/albums', [AlbumsController::class, 'index']);
Route::post ('/albums', [AlbumsController::class, 'store']);
Route::post ('/albums/{album}', [AlbumsController::class, 'update']);
Route::delete('/albums/{album}', [AlbumsController::class, 'destroy']);

Route::get ('/songs', [SongsController::class, 'index']);
Route::post ('/songs', [SongsController::class, 'store']);
Route::post ('/songs/{song}', [SongsController::class, 'update']);
Route::delete('/songs/{song}', [SongsController::class, 'destroy']);

Route::get ('/languages', [LanguagesController::class, 'index']);
Route::post ('/languages', [LanguagesController::class, 'store']);
Route::post ('/languages/{language}', [LanguagesController::class, 'update']);
Route::delete('/languages/{language}', [LanguagesController::class, 'destroy']);

Route::get ('/lists', [ListsController::class, 'index']);
Route::post ('/lists', [ListsController::class, 'store']);
Route::post ('/lists/{list}', [ListsController::class, 'update']);
Route::delete('/lists/{list}', [ListsController::class, 'destroy']);

Route::get ('/genres', [GenresController::class, 'index']);
Route::post ('/genres', [GenresController::class, 'store']);
Route::post ('/genres/{genre}', [GenresController::class, 'update']);
Route::delete('/genres/{genre}', [GenresController::class, 'destroy']);

Route::get ('/lists__songs', [ListsSongsController::class, 'index']);
Route::post ('/lists__songs', [ListsSongsController::class, 'store']);
Route::post ('/lists__songs/{list__song}', [ListsSongsController::class, 'update']);
Route::delete('/lists__songs/{list__song}', [ListsSongsController::class, 'destroy']);

Route::get ('/album__artists', [AlbumArtistController::class, 'index']);
Route::post ('/album__artists', [AlbumArtistController::class, 'store']);
Route::post ('/album__artists/{album__artist}', [AlbumArtistController::class, 'update']);
Route::delete('/album__artists/{album__artist}', [AlbumArtistController::class, 'destroy']);

Route::get ('/artist__songs', [ArtistSongsController::class, 'index']);
Route::post ('/artist__songs', [ArtistSongsController::class, 'store']);
Route::post ('/artist__songs/{artist__song}', [ArtistSongsController::class, 'update']);
Route::delete('/artist__songs/{artist__song}', [ArtistSongsController::class, 'destroy']);



