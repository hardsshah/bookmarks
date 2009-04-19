<?php
class DATABASE_CONFIG {

    var $development = array(
        'driver' => 'mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'admin',
        'password' => '',
        'database' => 'cake_bookmarks',
        'prefix' => '',
    );

    var $production = array(
        'driver' => 'mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => '',
        'password' => '',
        'database' => '',
        'prefix' => '',
    );

    function __construct(){
        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null;
        $hosts = array('localhost' => $this->development,
                                'madesecure.net' => $this->production
        );
        if(isset($host) && array_key_exists($host, $hosts)){
            $this->default = $hosts[$host];
        }else{
            $this->default = $this->development;
        }
    }
}