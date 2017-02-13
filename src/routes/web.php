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

// APP Routes Below
Route::get('/', 'jeremykenedy\podcast\PodcastsController@index');
Route::get('/podcast', 'jeremykenedy\podcast\PodcastsController@index');
Route::get('/podcasts/player', 'jeremykenedy\podcast\PodcastsController@index');
Route::get('/podcasts/manage', 'jeremykenedy\podcast\PodcastsController@manage');
Route::get('/podcasts/favorites', 'jeremykenedy\podcast\PodcastsController@favorites');
Route::get('/podcasts/settings', 'jeremykenedy\podcast\PodcastsController@settings');

Route::get('/podcasts/auto-update', function () {
	$exitCode = Artisan::call('updatePodcastItems');
	if ($exitCode == 0) {
		return redirect('podcasts/player');
	}
});

Route::resource('/podcasts', 'jeremykenedy\podcast\PodcastsController');

Route::get('/podcast/search', 'jeremykenedy\podcast\PodcastItemsController@search');
Route::post('/podcast/mark-as-read', 'jeremykenedy\podcast\PodcastItemsController@markAsRead');
Route::post('/podcast/mark-as-favorite', 'jeremykenedy\podcast\PodcastItemsController@markAsFavorite');
Route::post('/podcast/mark-all-prev-read', 'jeremykenedy\podcast\PodcastItemsController@markAllPrevAsRead');
