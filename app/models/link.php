<?php
class Link extends AppModel {

    var $name = 'Link';
    var $validate = array(
        'link_category_id' => array('numeric'),
        'name' => array('notempty'),
        'url' => array('notempty')
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
            'LinkCategory' => array('className' => 'LinkCategory',
                                'foreignKey' => 'link_category_id',
                                'conditions' => '',
                                'fields' => '',
                                'order' => ''
        )
    );
    function beforeFind(&$queryData){
        $queryData['order'] = array('Link.name' => 'ASC');
    }
}
?>