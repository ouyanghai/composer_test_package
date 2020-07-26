<?php
namespace Oyan\Weblogin\Facades;
use Illuminate\Support\Facades\Facade;
class Weblogin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'weblogin';
    }
}
