<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\MailingList;
use App\Http\Controllers\MailingListController;
use App\Http\Resources\MailingListResource;

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

Route::get('/mailing_lists', [MailingListController::class, 'index']);

Route::get('/mailing_list/{id}', function ($id) {
    return new MailingListResource(MailingList::findOrFail($id));
});

