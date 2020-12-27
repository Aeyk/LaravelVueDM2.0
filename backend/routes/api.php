<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\MailingList;
use App\Models\MailingLists;
use App\Http\Controllers\MailingListController;
use App\Http\Controllers\MailingListsController;
use App\Http\Resources\MailingListResource;
use App\Http\Resources\MailingListsResource;

    /*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::get('/mailing_lists/{id}.csv', function ($id) {
    return new MailingListsResource(MailingLists::findOrFail($id));
});

Route::get('/mailing_list/{id}.csv', function ($id) {
    return new MailingListResource(MailingList::findOrFail($id));
});


Route::get('/mailing_lists/{id}.json', function ($id) {
    return new MailingListsResource(MailingLists::findOrFail($id));
});

Route::get('/mailing_list/{id}.json', function ($id) {
    return new MailingListResource(MailingList::findOrFail($id));
});


Route::resource('/mailing_list/', MailingListController::class, [
    'except' => ['delete']
]);


Route::resource('/mailing_lists/', MailingListsController::class, [
    'except' => ['delete']
]);

Route::post('/mailing_list/upload', [MailingListController::class, 'upload'])->name('upload');

Route::post('/mailing_lists/upload', [MailingListsController::class, 'upload'])->name('upload');
