<?php
class LinkCategory extends AppModel {

    var $name = 'LinkCategory';
    var $validate = array(
        'name' => array('notempty')
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $hasMany = array(
            'Link' => array('className' => 'Link',
                                'foreignKey' => 'link_category_id',
                                'dependent' => true,
                                'conditions' => '',
                                'fields' => '',
                                'order' => '',
                                'limit' => '',
                                'offset' => '',
                                'exclusive' => '',
                                'finderQuery' => '',
                                'counterQuery' => ''
        )
    );
    function beforeFind(&$queryData){
        $queryData['order'] = array('LinkCategory.name' => 'ASC');
    }
    function countLinks($categoryName){
        App::import('Model', 'Link');
        $link = new Link();
        $settings = array('conditions' => array('LinkCategory.name' => $categoryName));
        return $link->find('count', $settings);
    }

}
