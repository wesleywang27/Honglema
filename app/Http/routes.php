<?php
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

Route::get('/test/celebrities/list{format?}', 'TestController@index');

Route::get('/test/list{format?}', 'TestController@show2');

Route::get('/test/celebrities', 'TestController@celebrityList');

Route::get('/test/{celebrity}','TestController@show');

Route::get('/playground/celebrity','PlaygroundController@index');

Route::resource('/picture', 'PictureController');

/*Route::group(['middleware' => ['web', 'wechat.oauth']], function () {*/

    Route::resource('/celebrity', 'CelebrityController');

    Route::get('/celebrities/list{format?}', 'CelebrityController@index');

    Route::get('/celebrity/{celebrity}', 'CelebrityController@show');
    
/*});*/

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

Route::get('/', function () {
    return view('index');
});
Route::get('/factory.php', 'FactoryController@index');

Route::post('/factory', 'FactoryController@createFactory');

Route::get('/brand.php', 'BrandController@index');

Route::post('/brand', 'BrandController@createBrand');

Route::get('/designer.php', 'DesignerController@index');

Route::post('/designer', 'DesignerController@createDesigner');

//网红入口

Route::get('/star/activity',"StarController@activity");

Route::get('/star/order',"StarController@order");

Route::get('/star/process',"StarController@process");

Route::get('/star/comment',"StarController@comment");

Route::get('/star/contention',"StarController@contention");

Route::get('/star/show_process',"StarController@show_process");

Route::get('/star/show_comment',"StarController@show_comment");

Route::get('/star/show_contention',"StarController@show_contention");

Route::get('/star/all_order',"StarController@all_order");

Route::get('/star/info',"StarController@info");