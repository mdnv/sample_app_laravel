<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Resources\UsersCollection;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UsersUserCollection;
use App\User;

Route::get('/users', function () {
    return new UsersCollection(User::all());
});

Route::get('/users/{id}', function () {
    return (new UserResource(User::find(4)))
                ->response()
                ->header('X-Value', 'True');
});
