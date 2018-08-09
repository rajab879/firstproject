<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use Illuminate\Support\Facades\App;//reqire for App::bind('foo',function(){

 
class FooServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('foo',function(){
              //foo the same name of return getFacadeAccessor
       
           return new  \App\Acme\Foo;
           //return new Foo;//use App\Acme\Foo; or //use \App\Acme\Foo; before class name
        });
        

    //     App()->bind('foo', function() {
    //         return new  \App\Acme\Foo;
    //   });
      
      
    }
}
