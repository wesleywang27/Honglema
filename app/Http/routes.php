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

Route::group(['middleware' => ['web', 'wechat.oauth']], function () {

    Route::resource('/celebrity', 'CelebrityController');

    Route::get('/celebrities/list{format?}', 'CelebrityController@index');

    Route::get('/celebrity/{celebrity}', 'CelebrityController@show');
    
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

/*
 *红了吗商家注册入口
 */

Route::get('/', function () {
    return view('index');
});
Route::get('/factory.php', 'FactoryController@index');

Route::post('/factory', 'FactoryController@createFactory');

Route::get('/brand.php', 'BrandController@index');

Route::post('/brand', 'BrandController@createBrand');

Route::get('/designer.php', 'DesignerController@index');

Route::post('/designer', 'DesignerController@createDesigner');

/*
 * 后台管理系统入口
 */
Route::get('/cms/logout', 'CMSController@logout');

Route::post('/cms/login.php','CMSController@login');

Route::get('/cms/login.php',function () {
    return view('/cms/login');
});

Route::get('/cms/designer', "CMSController@designer");

Route::get('/cms/index', "CMSController@index");

Route::get('/cms/', "CMSController@index");
