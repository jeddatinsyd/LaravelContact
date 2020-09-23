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
//display contact form
Route::get('/contact', 'App\Http\Controllers\ContactController@displayform');
//add contact data
Route::post('/add_data', 'App\Http\Controllers\ContactController@save');
//after inserting data it will go to display list of contact
Route::get('/addcontact', 'App\Http\Controllers\ContactController@displayform');
//display contact
Route::get('/', 'App\Http\Controllers\ContactController@viewform');
Route::get('/', 'App\Http\Controllers\ContactController@index');
//show edit contact
Route::get('edit/{id}', 'App\Http\Controllers\ContactController@edit_contact');
//delete contact
Route::get('delete/{id}', 'App\Http\Controllers\ContactController@delete_contact');
//update contact
Route::put('/update/{id}', 'App\Http\Controllers\ContactController@update_contact');
