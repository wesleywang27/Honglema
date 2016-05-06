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

Route::resource('/productPicture', 'ProductPictureController@store');

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

Route::group(['middleware' => ['web', 'wechat.oauth']], function () {
    Route::get('/', 'IndexController@index');

    Route::get('/factory_index', 'FactoryController@index');

    Route::post('/factory', 'FactoryController@createFactory');

    Route::get('/brand_index', 'BrandController@index');

    Route::post('/brand', 'BrandController@createBrand');

    Route::get('/designer_index', 'DesignerController@index');

    Route::post('/designer', 'DesignerController@createDesigner');

    Route::get('/stall_index', 'StallController@index');

    Route::post('/stall', 'StallController@createStall');
});
//use App\Models\Stall;
//Route::get('/stall_info',function () {
//    $stall = Stall::where('open_id','123')->first();
//    return view('stall_info',['stall' => $stall]);
//});

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

//信息删除入口
Route::get('/cms/factory/{id?}',"CMSController@deleteFactory");

Route::get('/cms/brand/{id?}',"CMSController@deleteBrand");

Route::get('/cms/designer/{id?}',"CMSController@deleteDesigner");

Route::get('/cms/stall/{id?}',"CMSController@deleteStall");

//访问列表入口
Route::resource('/cms/factory', "CMSController@factory");

Route::resource('/cms/brand', "CMSController@brand");

Route::resource('/cms/designer', "CMSController@designer");

Route::resource('/cms/stall', "CMSController@stall");

//信息详情入口
Route::get('/cms/factory_info/{id?}',"CMSController@factory_info");

Route::get('/cms/brand_info/{id?}',"CMSController@brand_info");

Route::get('/cms/designer_info/{id?}',"CMSController@designer_info");

Route::get('/cms/stall_info/{id?}',"CMSController@stall_info");

//信息修改入口
Route::get('/cms/factory_modify/{id?}',"CMSController@modifyFactoryInfo");

Route::post('/cms/factory_modify/{id?}',"CMSController@updateFactoryInfo");

Route::get('/cms/brand_modify/{id?}',"CMSController@modifyBrandInfo");

Route::post('/cms/brand_modify/{id?}',"CMSController@updateBrandInfo");

Route::get('/cms/designer_modify/{id?}',"CMSController@modifyDesignerInfo");

Route::post('/cms/designer_modify/{id?}', "CMSController@updateDesignerInfo");

Route::get('/cms/stall_modify/{id?}',"CMSController@modifyStallInfo");

Route::post('/cms/stall_modify/{id?}',"CMSController@updateStallInfo");

//信息查找入口
Route::get('/cms/factory/{name?}/{category?}', "CMSController@searchFactory");

Route::get('/cms/brand/{name?}/{category?}',"CMSController@searchBrand");

Route::get('/cms/designer/{name?}/{category?}',"CMSController@searchDesigner");

Route::get('/cms/stall/{name?}/{category?}',"CMSController@searchStall");

//图片修改入口
Route::post('/cms/factory_updateImg/{id?}',"CMSController@updateFactoryImg");

Route::post('/cms/brand_updateImg/{id?}',"CMSController@updateBrandImg");

Route::post('/cms/designer_updateImg/{id?}',"CMSController@updateDesignerImg");

Route::post('/cms/stall_updateImg/{id?}',"CMSController@updateStallImg");

//数据导出入口
Route::get('/cms/factory_export',"ExcelController@exportFactory");

Route::get('/cms/brand_export',"ExcelController@exportBrand");

Route::get('/cms/designer_export',"ExcelController@exportDesigner");

Route::get('/cms/stall_export',"ExcelController@exportStall");

//用户管理入口
Route::get('/cms/user',"UserController@index");

Route::post('/cms/user',"UserController@searchUser");

Route::get('cms/user/{id?}',"UserController@deleteUser");

Route::get('/cms/user_create',"UserController@createUserIndex");

Route::post('/cms/user_create',"UserController@createUser");

Route::get('/cms/user_info_confirm',"UserController@user_info_confirm");

Route::get('/cms/user_info',"UserController@user_info");

Route::post('/cms/user_info',"UserController@updateUser");