<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/practice-areas', [
            'uses' => 'WebsiteController@practiceAreas',
            'as' => 'practice-areas'
    ]);
    //Conveyancing Page
    Route::get('/conveyancing', [
            'uses' => 'WebsiteController@conveyancing',
            'as' => 'conveyancing'
    ]);
    //Corporate-commercial law Page
    Route::get('/commercial-law', [
            'uses' => 'WebsiteController@commerciallaw',
            'as' => 'commerciallaw'
    ]);
     //Dispute Resolution Page
     Route::get('/dispute-resolution', [
            'uses' => 'WebsiteController@disputeressolution',
            'as' => 'dispute-resolution'
    ]);
    //Dispute Resolution Page
    Route::get('/family-law', [
        'uses' => 'WebsiteController@familylaw',
        'as' => 'family-law'
    ]);
     //Our Team Page
     Route::get('/our-team', [
        'uses' => 'WebsiteController@team',
        'as' => 'team'
    ]);
    //Updates and Media Page
    Route::get('/updates-and-media', [
        'uses' => 'WebsiteController@media',
        'as' => 'media'
    ]);
    //Updates and Media Page
    Route::get('/contact-us', [
        'uses' => 'WebsiteController@contacts',
        'as' => 'contacts'
    ]);
