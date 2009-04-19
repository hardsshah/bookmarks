<?php
class User extends AppModel {

    var $name = 'User';
    var $actsAs = array('Acl' => array('requester'));
    var $validate = array(
                'role_id' => array('numeric'),
                'username' => array(
            array('rule' =>'/^.{4,40}$/', 'message' => 'This field must be between 4 and 40 charactors long'),
            array('rule' => 'validateUnique', 'message' => 'That username is already is use try another', 'field' => 'User.username')
        ),
                'password' => array('rule' =>'/^.{6,40}$/', 'message' => 'This field must be between 6 and 40 charactors long'),
                'email' => array('rule' => 'email', 'message' => 'This field must contain a valid email address')
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
            'Role' => array('className' => 'Role',
                                'foreignKey' => 'role_id',
                                'conditions' => '',
                                'fields' => '',
                                'order' => ''
        )
    );

    function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        $data = $this->data;
        if (empty($this->data)) {
            $data = $this->read();
        }
        if (!$data['User']['role_id']) {
            return null;
        } else {
            return array('Role' => array('id' => $data['User']['role_id']));
        }
    }

}
?>
