<?php

Route::get('/', function () {
    return view('homes.home');
})->name('home');

Route::get('matiere', 'MatieresController@matieres');
Route::get('matiere/{id}/chapitre', 'MatieresController@chapitres')->name('chapitre');
Route::get('chapitre/{id}/lecons', 'MatieresController@lecons')->name('lecons');
Route::get('lecons/{id}/lecon', 'MatieresController@lecon')->name('lecon');
Route::get('login', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth']], function() {
    Route::get('/', ['uses'=>'DashboardController@index', 'as'=>'dash']);
    Route::resource('users', 'UsersController')->middleware('Role:Superadmin|Admin');
    Route::resource('sales', 'SalesController');
    Route::resource('subjects', 'SubjectsController');
    Route::resource('chapters', 'ChaptersController');
    Route::resource('lessons', 'LessonsController');
    Route::resource('comments', 'CommentsController');
    Route::resource('forums', 'ForumsController');
    Route::resource('messages', 'MessagesController');
    Route::get('profileedit/{id}', 'ProfileController@edit');
    Route::put('profileupdate/{id}', 'ProfileController@update');
});
