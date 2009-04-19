<?php
class LinkCategoriesController extends AppController {

    var $name = 'LinkCategories';
    var $helpers = array('Html', 'Form');
    var $paginate = array('limit' => 10);
    var $viewPath = '_templates';

    function index() {
        $this->LinkCategory->recursive = 0;
        $linkCategories = $this->paginate();
        foreach($linkCategories as $key => $category){
            $linkCategories[$key]['LinkCategory']['links'] = $this->LinkCategory->countLinks($category['LinkCategory']['name']);
        }
        $this->set(compact('linkCategories'));
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid LinkCategory.', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->set('linkCategory', $this->LinkCategory->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->LinkCategory->create();
            if ($this->LinkCategory->save($this->data)) {
                $this->Session->setFlash(__('The LinkCategory has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The LinkCategory could not be saved. Please, try again.', true));
            }
        }
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid LinkCategory', true));
            $this->redirect(array('action'=>'index'));
        }
        if (!empty($this->data)) {
            if ($this->LinkCategory->save($this->data)) {
                $this->Session->setFlash(__('The LinkCategory has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The LinkCategory could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->LinkCategory->read(null, $id);
        }
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for LinkCategory', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->LinkCategory->del($id)) {
            $this->Session->setFlash(__('LinkCategory deleted', true));
            $this->redirect(array('action'=>'index'));
        }
    }

}
?>