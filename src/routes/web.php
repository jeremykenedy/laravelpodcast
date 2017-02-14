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
Route::group(['middleware' => 'web'], function () {

	//Route::get('/', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastsController@index');

	Route::get('/podcast', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastsController@index');
	Route::get('/podcasts/player', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastsController@index');
	Route::get('/podcasts/manage', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastsController@manage');
	Route::get('/podcasts/favorites', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastsController@favorites');
	Route::get('/podcasts/settings', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastsController@settings');

	Route::get('/podcasts/auto-update', function () {
		$exitCode = Artisan::call('updatePodcastItems');
		if ($exitCode == 0) {
			return redirect('podcasts/player');
		}
	});

	Route::resource('/podcasts', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastsController');

	Route::get('/podcast/search', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastItemsController@search');
	Route::post('/podcast/mark-as-read', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastItemsController@markAsRead');
	Route::post('/podcast/mark-as-favorite', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastItemsController@markAsFavorite');
	Route::post('/podcast/mark-all-prev-read', 'jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastItemsController@markAllPrevAsRead');

});

