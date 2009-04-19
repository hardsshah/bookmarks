<?php
class PearComponent extends object{
    public function startup(){
        $pearFolder = 'Pear';
        $successful = ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . APP . 'vendors' . DS . $pearFolder);
        if (!$successful) {
            throw new Exception('PearComponent failed to set include path.', E_ERROR);
        }
    }
    public function loadClass($class){
        $filename = str_replace('_', DS, $class) . '.php';
        require_once($filename);
    }
}