<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// all pages
Route::get('/', '\App\Http\Controllers\PageController@mainPage')->name('main');
Route::get('/events', 'App\Http\Controllers\PageController@eventPage' )->name('events.index');
Route::get('/services', '\App\Http\Controllers\PageController@servicePage')->name('services.index');
Route::get('/food_zones', '\App\Http\Controllers\PageController@foodZonePage')->name('food_zones.index');
Route::get('/gallery', '\App\Http\Controllers\PageController@galleryPage')->name('gallery');
Route::get('/news', '\App\Http\Controllers\PageController@newsPage')->name('news.index');
Route::get('/map', '\App\Http\Controllers\PageController@mapPage')->name('map');

//send mail
Route::get('/send', '\App\Http\Controllers\MailController@send')->name('send');

//filter event
Route::get('/get-events', '\App\Http\Controllers\EventController@getEvents')->name('get-events');

//filter comment
Route::get('/get-comments', '\App\Http\Controllers\PageController@getComments')->name('get-comments');

//add comment
Route::post('/map', '\App\Http\Controllers\MapController@addReview')->name('add-comments');

//event tickets
Route::get('/events/{event}', 'App\Http\Controllers\EventController@show' )->name('events.show');
Route::post('/ticket_init','App\Http\Controllers\EventController@ticket_init')->name('ticket_init');
Route::post('/payment/{bookingEvent}', 'App\Http\Controllers\EventController@init_payment' )->name('init_payment');

//pages by id
Route::get('/news/{news}', 'App\Http\Controllers\NewsController@show' )->name('news.show');
Route::get('/services/{service}', 'App\Http\Controllers\ServiceController@show' )->name('services.show');
Route::get('/food_zones/{food_zone}', 'App\Http\Controllers\FoodZoneController@show' )->name('food_zones.show');

//booking
Route::post('/booking_tubing', 'App\Http\Controllers\ServiceController@booking_tubing' )->name('services.booking_tubing');
Route::post('/booking_skating', 'App\Http\Controllers\ServiceController@booking_skating' )->name('services.booking_skating');


//admin

//admin login
Route::get('/admin/login', 'App\Http\Controllers\Admin\AuthController@index' )->name('admin.login');
Route::post('/admin/login_process', 'App\Http\Controllers\Admin\AuthController@login' )->name('admin.login_process');
Route::post('/admin/logout', 'App\Http\Controllers\Admin\AuthController@logout' )->name('admin.logout');

//admin pages
Route::get('/admin/main', 'App\Http\Controllers\Admin\AuthController@main' )->name('admin.main');
Route::get('/admin/events', 'App\Http\Controllers\Admin\EventController@index' )->name('admin.events.index');
Route::get('/admin/gallery', '\App\Http\Controllers\Admin\GallaryController@index')->name('admin.gallery.index');
Route::get('/admin/food_zones', '\App\Http\Controllers\Admin\FoodZoneController@index')->name('admin.food_zones.index');
Route::get('/admin/news', '\App\Http\Controllers\Admin\NewsController@index')->name('admin.news.index');
Route::get('/admin/services', '\App\Http\Controllers\Admin\ServiceController@index')->name('admin.services.index');
Route::get('/admin/users', '\App\Http\Controllers\Admin\UserController@index')->name('admin.users.index');
Route::get('/admin/reviews', '\App\Http\Controllers\Admin\ReviewController@index')->name('admin.reviews.index');
Route::get('/admin/tickets', '\App\Http\Controllers\Admin\BookingEventController@index')->name('admin.tickets.index');
Route::get('/admin/bookings', '\App\Http\Controllers\Admin\BookingController@booking')->name('admin.bookings.index');


//edit pages
Route::get('/admin/events/{event}/edit', 'App\Http\Controllers\Admin\EventController@edit' )->name('admin.events.edit');
Route::get('/admin/food_zones/{food_zone}/edit', '\App\Http\Controllers\Admin\FoodZoneController@edit')->name('admin.food_zones.edit');
Route::get('/admin/news/{news}/edit', '\App\Http\Controllers\Admin\NewsController@edit')->name('admin.news.edit');
Route::get('/admin/services/{service}/edit', '\App\Http\Controllers\Admin\ServiceController@edit')->name('admin.services.edit');
Route::get('/admin/users/{user_guest}/edit', '\App\Http\Controllers\Admin\UserController@edit')->name('admin.users.edit');


//create pages
Route::get('/admin/events/create', 'App\Http\Controllers\Admin\EventController@create' )->name('admin.events.create');
Route::get('/admin/food_zones/create', '\App\Http\Controllers\Admin\FoodZoneController@create')->name('admin.food_zones.create');
Route::get('/admin/news/create', '\App\Http\Controllers\Admin\NewsController@create')->name('admin.news.create');
Route::get('/admin/services/create', '\App\Http\Controllers\Admin\ServiceController@create')->name('admin.services.create');
Route::get('/admin/users/create', '\App\Http\Controllers\Admin\UserController@create')->name('admin.users.create');


//store methods
Route::post('/admin/events', 'App\Http\Controllers\Admin\EventController@store' )->name('admin.events.store');
Route::post('/admin/gallery', 'App\Http\Controllers\Admin\GallaryController@store' )->name('admin.gallery.store');
Route::post('/admin/food_zones', '\App\Http\Controllers\Admin\FoodZoneController@store')->name('admin.food_zones.store');
Route::post('/admin/news', '\App\Http\Controllers\Admin\NewsController@store')->name('admin.news.store');
Route::post('/admin/services', '\App\Http\Controllers\Admin\ServiceController@store')->name('admin.services.store');
Route::post('/admin/users', '\App\Http\Controllers\Admin\UserController@store')->name('admin.users.store');



//update methods
Route::put('/admin/events/{event}', 'App\Http\Controllers\Admin\EventController@update' )->name('admin.events.update');
Route::put('/admin/food_zones{food_zone}', '\App\Http\Controllers\Admin\FoodZoneController@update')->name('admin.food_zones.update');
Route::put('/admin/news/{news}', '\App\Http\Controllers\Admin\NewsController@update')->name('admin.news.update');
Route::put('/admin/services/{service}', '\App\Http\Controllers\Admin\ServiceController@update')->name('admin.services.update');
Route::put('/admin/users/{user_guest}', '\App\Http\Controllers\Admin\UserController@update')->name('admin.users.update');


//destroy elements

Route::delete('/admin/events/{event}', 'App\Http\Controllers\Admin\EventController@destroy')->name('admin.events.delete');
Route::delete('/admin/gallery/{gallery}', 'App\Http\Controllers\Admin\GallaryController@destroy')->name('admin.gallery.delete');
Route::delete('/admin/food_zones/{food_zone}', '\App\Http\Controllers\Admin\FoodZoneController@destroy')->name('admin.food_zones.delete');
Route::delete('/admin/news/{news}', '\App\Http\Controllers\Admin\NewsController@destroy')->name('admin.news.delete');
Route::delete('/admin/services/{service}', '\App\Http\Controllers\Admin\ServiceController@destroy')->name('admin.services.delete');
Route::delete('/admin/users/{user_guest}', '\App\Http\Controllers\Admin\UserController@destroy')->name('admin.users.delete');
Route::delete('/admin/reviews/{comment}', '\App\Http\Controllers\Admin\ReviewController@destroy')->name('admin.reviews.delete');
Route::delete('/admin/booking_s/{booking}', '\App\Http\Controllers\Admin\BookingController@delete_skate')->name('admin.booking_s.delete');
Route::delete('/admin/booking_t/{booking}', '\App\Http\Controllers\Admin\BookingController@delete_tubing')->name('admin.booking_t.delete');


