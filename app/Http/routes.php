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

Route::resource('/productPicture', 'ProductPictureController');

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
    
    //首页
    Route::get('/', 'IndexController@index');
    
    Route::get('/login','IndexController@login');

    //工厂
    Route::get('/factory_index', 'FactoryController@index');

    Route::post('/factory', 'FactoryController@createFactory');

    Route::get('/factory_modify', 'FactoryController@modifyFactory');

    Route::post('/factory_modify', 'FactoryController@updateFactory');

    //品牌商
    Route::get('/brand_index', 'BrandController@index');

    Route::post('/brand', 'BrandController@createBrand');

    Route::get('/brand_modify', 'BrandController@modifyBrand');

    Route::post('/brand_modify', 'BrandController@updateBrand');

    //设计师
    Route::get('/designer_index', 'DesignerController@index');

    Route::post('/designer', 'DesignerController@createDesigner');

    Route::get('/designer_modify', 'DesignerController@modifyDesigner');

    Route::post('/designer_modify', 'DesignerController@updateDesigner');

    //档口
    Route::get('/stall_index', 'StallController@index');

    Route::post('/stall', 'StallController@createStall');

    Route::get('/stall_modify', 'StallController@modifyStall');

    Route::post('/stall_modify', 'StallController@updateStall');
});

/*
 * 红了吗后台管理系统入口
 */

//Route::group(['domain' => 'cms.honglema.com'], function() {

    //登录登出模块入口
    Route::get('/cms/logout', 'CMSController@logout');

    Route::post('/cms/login', 'CMSController@login');

    Route::get('/cms/login',function () {
        return view('/cms/login');
    });

    //忘记密码
    Route::get('/cms/forget',function () {
        return view('/cms/forget');
    });
    Route::post('/cms/forget', 'UserController@forget');

    //首页入口
    Route::get('/cms/index', "CMSController@index");

    Route::get('/cms/', "CMSController@index");

    //访问列表入口
    Route::resource('/cms/factoryList', "CMSController@factory");

    Route::resource('/cms/brandList', "CMSController@brand");

    Route::resource('/cms/designerList', "CMSController@designer");

    Route::resource('/cms/stallList', "CMSController@stall");

    Route::resource('/cms/celebrityList', "CMSController@celebrity");

    //信息详情入口
    Route::get('/cms/factory_info/{id?}',"CMSController@factory_info");

    Route::get('/cms/brand_info/{id?}',"CMSController@brand_info");

    Route::get('/cms/designer_info/{id?}',"CMSController@designer_info");

    Route::get('/cms/stall_info/{id?}',"CMSController@stall_info");

    Route::get('/cms/celebrity_info/{id?}',"CMSController@celebrity_info");

    //信息修改入口
    Route::get('/cms/factory_modify/{id?}',"CMSController@modifyFactoryInfo");

    Route::post('/cms/factory_modify/{id?}',"CMSController@updateFactoryInfo");

    Route::get('/cms/brand_modify/{id?}',"CMSController@modifyBrandInfo");

    Route::post('/cms/brand_modify/{id?}',"CMSController@updateBrandInfo");

    Route::get('/cms/designer_modify/{id?}',"CMSController@modifyDesignerInfo");

    Route::post('/cms/designer_modify/{id?}', "CMSController@updateDesignerInfo");

    Route::get('/cms/stall_modify/{id?}',"CMSController@modifyStallInfo");

    Route::post('/cms/stall_modify/{id?}',"CMSController@updateStallInfo");

    Route::get('/cms/celebrity_modify/{id?}',"CMSController@modifyCelebrityInfo");

    Route::post('/cms/celebrity_update/{id?}',"CMSController@updateCelebrityInfo");

    //信息删除入口
    Route::get('/cms/factory_delete/{id?}',"CMSController@deleteFactory");

    Route::get('/cms/brand_delete/{id?}',"CMSController@deleteBrand");

    Route::get('/cms/designer_delete/{id?}',"CMSController@deleteDesigner");

    Route::get('/cms/stall_delete/{id?}',"CMSController@deleteStall");

    Route::get('/cms/celebrity_delete/{id?}',"CMSController@deleteCelebrity");

    //信息查找入口
    Route::get('/cms/factory/{name?}/{category?}', "CMSController@searchFactory");

    Route::get('/cms/brand/{name?}/{category?}',"CMSController@searchBrand");

    Route::get('/cms/designer/{name?}/{category?}',"CMSController@searchDesigner");

    Route::get('/cms/stall/{name?}/{category?}',"CMSController@searchStall");

    Route::get('/cms/celebrity/{name?}/{category?}',"CMSController@searchCelebrity");

    //图片修改入口
    Route::post('/cms/factory_updateImg/{id?}',"CMSController@updateFactoryImg");

    Route::post('/cms/brand_updateImg/{id?}',"CMSController@updateBrandImg");

    Route::post('/cms/designer_updateImg/{id?}',"CMSController@updateDesignerImg");

    Route::post('/cms/stall_updateImg/{id?}',"CMSController@updateStallImg");

    Route::post('/cms/celebrity_updateImg/{id?}',"CMSController@updateCelebrityImg");

    //信息添加页
    Route::get('/cms/factory_create',"CMSController@createFactoryIndex");

    Route::post('/cms/factory_create',"CMSController@createFactory");

    Route::get('/cms/brand_create',"CMSController@createBrandIndex");

    Route::post('/cms/brand_create',"CMSController@createBrand");

    Route::get('/cms/designer_create',"CMSController@createDesignerIndex");

    Route::post('/cms/designer_create',"CMSController@createDesigner");

    Route::get('/cms/stall_create',"CMSController@createStallIndex");

    Route::post('/cms/stall_create',"CMSController@createStall");

    Route::get('/cms/celebrity_create',"CMSController@createCelebrityIndex");

    Route::post('/cms/celebrity_create',"CMSController@createCelebrity");

    //数据导出入口
    Route::get('/cms/factory_export',"ExcelController@exportFactory");

    Route::get('/cms/brand_export',"ExcelController@exportBrand");

    Route::get('/cms/designer_export',"ExcelController@exportDesigner");

    Route::get('/cms/stall_export',"ExcelController@exportStall");

    Route::get('/cms/celebrity_export',"ExcelController@exportCelebrity");

    //用户管理入口
    Route::get('/cms/user',"UserController@index");

    Route::post('/cms/user',"UserController@searchUser");

    Route::get('/cms/user/{id?}',"UserController@deleteUser");

    Route::get('/cms/user_create',"UserController@createUserIndex");

    Route::post('/cms/user_create',"UserController@createUser");

    Route::get('/cms/user_info_confirm',"UserController@user_info_confirm");

    Route::get('/cms/user_info',"UserController@user_info");

    Route::post('/cms/user_info',"UserController@updateUser");

    Route::get('/cms/user_right/{id?}',"UserController@modifyUserRight");

    Route::post('/cms/user_right/{id?}',"UserController@updateUserRight");

    //操作日志入口
    Route::get('/cms/logList',"LogController@index");

//});


/*
 * 
 * 滴滴打网红 后台系统
 * 
 */

Route::group(['domain' => 'cms.honglema.com'], function() {
    //登入登出
    Route::get('/didi/login',"DidiController@loginIndex");

    Route::post('/didi/login',"DidiController@login");

    Route::get('/didi/logout',"DidiController@logout");

    //首页
    Route::get('/didi',"DidiController@index");

    Route::get('/didi/index',"DidiController@index");

    //商家信息管理
    Route::get('/didi/MerchantCreate',"MerchantController@merchantCreate");

    Route::post('/didi/MerchantCreate',"MerchantController@merchantStore");

    Route::get('/didi/MerchantDelete/{id?}',"MerchantController@merchantDelete");

    Route::get('/didi/MerchantModify/{id?}',"MerchantController@merchantModify");

    Route::post('/didi/MerchantModify/{id?}',"MerchantController@merchantUpdate");

    Route::get('/didi/MerchantList',"MerchantController@merchantList");
    
    Route::get('/didi/MerchantInfo/{id?}',"MerchantController@merchantInfo");

    //活动信息管理
    Route::get('/didi/ActivityCreate/{merchant_id?}',"ActivityController@activityCreate");

    Route::post('/didi/ActivityCreate/{merchant_id?}',"ActivityController@activityStore");

    Route::get('/didi/ActivityDelete/{activity_id}',"ActivityController@activityDelete");

    Route::get('/didi/ActivityModify/{activity_id?}',"ActivityController@activityModify");

    Route::get('/didi/ActivityChooseOrder/{activity_id?}',"ActivityController@activityChooseOrder");
    
    Route::get('/didi/ActivityChooseStar/{task_id?}/{star_id}',"ActivityController@activityChooseStar");

    Route::get('/didi/ActivityEvaluate/{activity_id?}',"ActivityController@activityEvaluate");

    Route::post('/didi/ActivityEvaluate/{activity_id?}',"ActivityController@activityEvaluation");

    Route::get('/didi/ActivityList',"ActivityController@activityList");

    Route::get('/didi/ActivityInfo/{activity_id?}',"ActivityController@activityInfo");

    //商品信息管理
    Route::get('/didi/CommodityCreate/{activity_id?}',"CommodityController@commodityCreate");

    Route::post('/didi/CommodityCreate/{activity_id?}',"CommodityController@commodityStore");
});
//网红入口

// ,'middleware' => ['web', 'wechat.oauth']
Route::group(['prefix' => 'star', 'namespace' => 'star','middleware' => ['web', 'wechat.oauth']], function(){
    Route::get('/index',"StarController@index");

    Route::get('/activity',"StarController@activity");

    Route::get('/order',"StarController@order");

    Route::post('/cancelOrder',"StarController@cancelOrder");

     Route::get('/task_result',"StarController@task_result");

     Route::post('/submitTaskResult',"StarController@submitTaskResult");

   Route::get('/order_detail',"StarController@order_detail");

    Route::get('/merchant',"StarController@merchant_info");

    Route::get('/process',"StarController@process");

    Route::get('/comment',"StarController@comment");

    Route::get('/contention',"StarController@contention");

    Route::get('/show_process',"StarController@show_process");

    Route::get('/show_comment',"StarController@show_comment");

    Route::get('/show_contention',"StarController@show_contention");

    Route::get('/all_order',"StarController@all_order");

    Route::get('/info',"StarController@info");

    Route::get('/create',"StarController@create");

    Route::post('/register',"StarController@register");

    Route::post('/update',"StarController@update");

    Route::post('/uploadimg',"StarController@uploadimg");

    Route::get('/activityList',"ActivityController@index");

    Route::get('/activityDetail/{id?}',"ActivityController@detail");

    Route::post('/setOrder',"ActivityController@setOrder");

    Route::get('/visitor',"ActivityController@visitor");

    //Set Session,Delete after test
    Route::get('/setSession',"RootController@setSession");
});


/*
**
** 商家注册
** @author tianxugeng
**
*/
// ,'middleware' => ['web', 'wechat.oauth']
Route::group(['prefix' => 'Merchant', 'namespace' => 'Merchant'], function()
{

        //首页
        Route::get('/', 'IndexController@index');
        Route::get('/login','IndexController@login');


        //用户信息管理
        Route::get('/user', 'UserController@index');
        Route::get('/user/modify', 'UserController@modify');
        Route::post('/user/updateUser', 'UserController@save');

        //活动订单管理
        Route::get('/activityOrder','ActivityController@index');
        Route::get('/activityOrder/addOrder','ActivityController@addOrder');
        Route::get('/activityOrder/activityDetail/{id?}',"ActivityController@activityDetail");
        Route::post('/activityOrder/setOrder',"ActivityController@setOrder");

        //注册
        Route::get('/register', 'IndexController@index');
        Route::post('/register/save', 'IndexController@register');
        Route::resource('/register/uploadPicture', 'IndexController@uploadPic');

});

