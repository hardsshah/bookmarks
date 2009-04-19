<?php
if(isset($authUser) && isset($authRole)){
    echo "Logged in as <em>$authRole</em> <strong>$authUser</strong> [" . $html->link('Logout', array('controller' => 'users', 'action' => 'logout')) . ']';
}else{
    //echo '[' . $html->link('Login', array('controller' => 'users', 'action' => 'login')) . ']';
}
?>