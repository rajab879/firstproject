<?php
namespace App\Acme\Facade;
use Illuminate\Support\Facades\Facade;
class Foo extends  \Illuminate\Support\Facades\Facade {

public static function getFacadeAccessor(){

    return 'foo';
}

}