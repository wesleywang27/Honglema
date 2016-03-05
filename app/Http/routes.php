<?php
use App\Models\Celebrity;
use App\Models\Picture;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/celebrities/list', function () {
    $celebrities = Celebrity::paginate(20);
    return view('celebrities', ['celebrities' => $celebrities]);
});

Route::get('/celebrities/list.json', function () {
    $celebrities = Celebrity::paginate(20);
    return $celebrities;
});

Route::get('/celebrity/{celebrity}', function (Celebrity $celebrity) {
    return view('celebrity', ['celebrity' => $celebrity]);
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
