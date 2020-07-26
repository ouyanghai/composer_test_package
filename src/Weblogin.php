<?php
namespace Oyan\Weblogin;

class Weblogin{

    public function __construct(){
    }

    public function login($msg = ''){
        $config = config('weblogin');
        return $msg.'---'.json_encode($config);
    }
}
