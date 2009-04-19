<?php
class HomeController extends AppController{
    var $name ='Home';
    var $uses = array('LinkCategory', 'Link');

    function index(){
        $this->set('linkCategories', $this->LinkCategory->find('list'));
        $this->set('links', $this->Link->find('all'));
    }
}