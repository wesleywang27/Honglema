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

Route::resource('/productpicture', 'ProductPictureController');

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
Route::get('/factory_index', 'FactoryController@index');

Route::post('/factory', 'FactoryController@createFactory');

Route::get('/brand_index', 'BrandController@index');

Route::post('/brand', 'BrandController@createBrand');

Route::get('/designer_index', 'DesignerController@index');

Route::post('/designer', 'DesignerController@createDesigner');

Route::get('/stall_index', 'StallController@index');

Route::post('/stall', 'StallController@createStall');

/*
 * 红了吗后台管理系统入口
 */

//登录登出模块入口
Route::get('/cms/logout', 'CMSController@logout');

Route::post('/cms/login.php','CMSController@login');

Route::get('/cms/login.php',function () {
    return view('/cms/login');
});

//首页入口
Route::get('/cms/index', "CMSController@index");

Route::get('/cms/', "CMSController@index");

//列表页入口
Route::get('/cms/factory', "CMSController@factory");

Route::get('/cms/brand', "CMSController@brand");

Route::get('/cms/designer', "CMSController@designer");

Route::get('/cms/stall', "CMSController@stall");

//详情页入口
Route::get('/cms/factory_info/{id?}',"CMSController@factory_info");

Route::get('/cms/brand_info/{id?}',"CMSController@brand_info");

Route::get('/cms/designer_info/{id?}',"CMSController@designer_info");

Route::get('/cms/stall_info/{id?}',"CMSController@stall_info");

//信息删除入口
Route::get('/cms/factory/{id?}',"CMSController@deleteFactory");

Route::get('/cms/brand/{id?}',"CMSController@deleteBrand");

Route::get('/cms/designer/{id?}',"CMSController@deleteDesigner");

Route::get('/cms/stall/{id?}',"CMSController@deleteStall");

//信息查找入口
Route::post('/cms/factory',"CMSController@searchFactory");

Route::post('/cms/brand',"CMSController@searchBrand");

Route::post('/cms/designer',"CMSController@searchDesigner");

Route::post('/cms/stall',"CMSController@searchStall");

//用户管理入口
Route::get('/cms/user',"UserController@index");

Route::post('/cms/user',"UserController@searchUser");

Route::get('/cms/user_create',"UserController@createUserIndex");

Route::post('/cms/user_create',"UserController@createUser");

Route::get('/cms/user_info',"UserController@user_info");

Route::post('/cms/user_info',"UserController@updateUser");
