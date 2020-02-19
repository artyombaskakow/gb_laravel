<?php


// Route::get('/', function () {
//     return view('welcome');
// });

//Route::view('/', 'welcome');
//Route::resource('News', 'NewsController@index');


Route::get('/', 'HomeController@index')->name('home'); 

Route::group([
    'prefix' => 'admin', // префикс роута (site/admin/test1)
    'namespace' => 'Admin', // папка расположения файла контроллера
    'as' => 'admin.'
], function(){
    Route::get('/index', 'IndexController@index')->name('admin'); 
    Route::get('/test1', 'IndexController@test1')->name('test1');
    Route::get('/test2', 'IndexController@test2')->name('test2');
});

// Route::get('/admin', 'Admin\IndexController@index')->name('admin'); // создание роута с псевдонимом (к нему можно потом обращаться)
// Route::get('/test1', 'Admin\IndexController@test1');
// Route::get('/test2', 'Admin\IndexController@test2');


Route::group(
    [
        'prefix' => 'news',
        'as' => 'news.',
    ], function(){
        Route::get('/all', 'NewsController@news')->name('all');
        Route::get('/one/{newsId}', 'NewsController@newsOne')->name('one');
        Route::get('/categories', 'NewsController@categories')->name('categories');
        Route::get('/category/{id}', 'NewsController@categoryId')->name('categoryId');
        Route::get('/add', 'NewsController@addNews')->name('add');
    }
);


// Route::get('/news', function () {
//     return view('news');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Auth::routes();

