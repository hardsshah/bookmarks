<?php
class AppModel extends Model {

    function validateUnique($value, $params = array()) {
        if (!$this->id) {
            if ($this->hasAny(array($params['field'] => $value))){
                return false;
            }
        }
        return true;
    }
}
?>