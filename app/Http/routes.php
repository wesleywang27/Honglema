<?php
use App\Models\Celebrity;
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

Route::get('/celebrities/list{format?}', function ($format = null) {
    $celebrities = Celebrity::with('pictures')->orderBy('sort_manually', 'DESC')->paginate(10);
    foreach ($celebrities as &$celebrity) {
        if ($celebrity->profile_img)
            $celebrity->profile_img = dirname($celebrity->profile_img) . "/comp-" . basename($celebrity->profile_img);

        foreach ($celebrity->pictures as &$picture) {
            $picture->url = dirname($picture->url) . "/comp-" . basename($picture->url);
        }
    }
    if ($format === '.json')
        return $celebrities;
    return view('celebrities', ['celebrities' => $celebrities]);
});

Route::get('/celebrity/{celebrity}', function (Celebrity $celebrity) {
    return view('celebrity', ['celebrity' => $celebrity]);
});

Route::get('/test/celebrities/list{format?}', function ($format = null) {
    $celebrities = Celebrity::with('pictures')->orderBy('sort_manually', 'DESC')->paginate(10);
    foreach ($celebrities as &$celebrity) {
        $celebrity->setVisible(['id', 'pictures']);
        foreach ($celebrity->pictures as &$picture) {
            $picture->setVisible(['url']);
            $picture->url = dirname($picture->url) . "/comp-" . basename($picture->url);
        }
    }

    if ($format === '.json')
        return $celebrities;
    return view('celebrities', ['celebrities' => $celebrities]);
});

Route::get('/test/list{format?}', function ($format = null) {
    $celebrities = Celebrity::with('pictures')->orderBy('total_fans_num', 'DESC')->paginate(10);
    foreach ($celebrities as &$celebrity) {
        foreach ($celebrity->pictures as &$picture) {
            $picture->url = dirname($picture->url) . "/comp-" . basename($picture->url);
        }
    }
    if ($format === '.json')
        return $celebrities;
    return view('test', ['celebrities' => $celebrities]);
});

Route::get('/test', 'TestController@celebrityList');

Route::get('/test/{celebrity}', function (Celebrity $celebrity) {
    return view('test', ['celebrity' => $celebrity]);
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
