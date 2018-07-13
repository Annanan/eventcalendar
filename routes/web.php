<?php

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


Route::get('/', function () {
    return view('cover');
});

Route::get('zenbu', 'EventsController@zenbu')->name('events.events');


Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');




Route::get('omatsuri', 'EventsController@omatsuri')->name('events.omatsuri');
Route::get('eiga', 'EventsController@eiga')->name('events.eiga');
Route::get('leisure', 'EventsController@leisure')->name('events.leisure');
Route::get('sports', 'EventsController@sports')->name('events.sports');
Route::get('ongaku', 'EventsController@ongaku')->name('events.ongaku');
Route::get('gurume', 'EventsController@gurume')->name('events.gurume');
Route::get('geijutsu', 'EventsController@geijutsu')->name('events.geijutsu');
Route::get('mycalendar', 'UsersController@event_favorites')->name('mypage.mycalendar');

Route::get('/show/{id}', 'EventsController@show')->name('events.show');
// {}はおそらく変数と同義　{id}は$id

Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('favoru', 'EventFavoriteController@store')->name('user.favoru');
        Route::delete('unfavoru', 'EventFavoriteController@destroy')->name('user.unfavoru');
        Route::get('favorites', 'UsersController@event_favorites')->name('users.favorites');
});

Route::resource('events', 'EventFavoriteController', ['only' => ['store', 'destroy']]);

Route::post('search', 'SearchController@search')->name('events.search');
Route::get('search', 'SearchController@search')->name('events.search');


// Route::get('search', function () {
//     return view('search.search');
// });


// Route::get('search', function () { 
//                                   if(isset ( $_POST['search'])){'SearchController@search'};
//                                   else{return view('search')})
