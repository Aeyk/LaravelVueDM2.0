<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailingListController;

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
    return view("mailing_lists");
});

Route::get('/mailing_lists', function () {
    return view("mailing_lists");
});

Route::get('/mailing_lists/upload', function () {
    return view("mailing_lists_upload");
});

Route::get('/mailing_lists/index', function () {
    return view("mailing_lists_index");
});


Route::get('/mailing_list/{id}.csv', function ($id) {
    return view("mailing_list", ['id' => $id]);
});


Route::get('/mailing_list', function () {
    return view("mailing_list");
});

Route::get('/mailing_list/{id}', function () {
    return view("mailing_list");
});
