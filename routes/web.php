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

 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');




//Route::get('/foo2', 'HomeController@foo');

Route::get('/foo', function () {
      $foo=new App\Acme\Foo;

    return $foo->Bar();
});



Route::get('/foo3', function () {
    
   //return App\Acme\Facade\Foo::Bar();//'fooalias' => App\Acme\Facade\Foo::class,
   //this class  App\Acme\Facade\Foo the getFacadeAccessor() which return the   name of binding string  
   //that used in service provider to return instace of the class needed 
  
   return fooalias::Bar();
  //fooalias found in app/config/app.php
});

