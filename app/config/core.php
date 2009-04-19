<?php
/**
 * A random string used in security hashing methods.
 */
Configure::write('Security.salt', 'DYhG93b0qyJfIudfhg-WwvniR2G0FgaC9mi');
 /**
 * The name of CakePHP's session cookie.
 */
Configure::write('Session.cookie', 'CAKEPHP');
/**
 * Application wide charset encoding
 */
Configure::write('App.encoding', 'UTF-8');

$anon = create_function(null,  <<<_END_
\$host = isset(\$_SERVER['HTTP_HOST']) ? \$_SERVER['HTTP_HOST'] : 'safe';
\$developmentHosts = array('localhost');
if(in_array(\$host, \$developmentHosts)){
require_once(ROOT . DS . APP_DIR . DS . 'config/core.development.php');
}else{
require_once(ROOT . DS . APP_DIR . DS . 'config/core.production.php');
}
_END_
);
$anon();