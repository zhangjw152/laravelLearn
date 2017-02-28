<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//缺省是默认为'laravel'

Route::get('/hello/name/{name?}',function ($name="laravel"){
    return "hello {$name}";
})->where('name','[A-Za-z]+');//参数的类型进行过滤
//Route::match(['get','post'],'/hello',function(){
//    return 'hello laravel';
//});

Route::get('/le/laravelAcademy/{name?}',['as'=>'academy',function ($name='zjw'){//为路由命名为academy
    return "hello laravel {$name}";
}]);
Route::get('/testNameRoute/{name?}',function ($name='test'){//当没有name参数是输出的是zjw
    return redirect()->route('academy',[$name]);//这里的academy前面不加/
});
