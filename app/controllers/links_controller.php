<?php
class LinksController extends AppController {

    var $name = 'Links';
    var $helpers = array('Html', 'Form');
    var $viewPath = '_templates';
    var $paginate = array('limit' => 20);

    function index() {
        $this->Link->recursive = 0;
        $this->set('links', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid Link.', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->set('link', $this->Link->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->Link->create();
            if ($this->Link->save($this->data)) {
                $this->Session->setFlash(__('The Link has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The Link could not be saved. Please, try again.', true));
            }
        }
        $linkCategories = $this->Link->LinkCategory->find('list');
        $this->set(compact('linkCategories'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid Link', true));
            $this->redirect(array('action'=>'index'));
        }
        if (!empty($this->data)) {
            if ($this->Link->save($this->data)) {
                $this->Session->setFlash(__('The Link has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The Link could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Link->read(null, $id);
        }
        $linkCategories = $this->Link->LinkCategory->find('list');
        $this->set(compact('linkCategories'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for Link', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Link->del($id)) {
            $this->Session->setFlash(__('Link deleted', true));
            $this->redirect(array('action'=>'index'));
        }
    }

}
?>