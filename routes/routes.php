<?php

/*
|--------------------------------------------------------------------------
| Routes registered by this package
|--------------------------------------------------------------------------
|
| These routes could be anything from web/api/services/... routes.
|
| Add them to the appropriate middleware for yourself ;-)
|
| These routes might get overwritten by Laravel's web.php, api.php, ... !!
|
*/

Route::get('hello', function()
{
    return view('demo-views::hello');
});

Route::group(['middleware' => ['web', /* 'auth' */]], function ()
{
    // Route::auth();

    Route::get('me', function()
    {
        return view('demo-views::me', ['user' => Auth::user()]);
    });
});

Route::group(['middleware' => ['api', /* 'cors', 'jwt-auth' */]], function ()
{
    Route::get("api/v1/me", function()
    {
        return response()->json(Auth::user(), 200);
    });
});
