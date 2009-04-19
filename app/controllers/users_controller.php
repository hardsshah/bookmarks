<?php
class UsersController extends AppController {

    var $name = 'Users';

    function login() {
        //Auth Magic
    }
    function logout() {
        $this->Session->setFlash('Good-Bye');
        $this->redirect($this->Auth->logout());
    }

    function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid User.', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->User->create();
            if ($this->User->save($this->data)) {
                $this->_updateAro($this->User->field('role_id'));
                $this->Session->setFlash(__('The User has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
            }
        }
        $roles = $this->User->Role->find('list');
        $this->set(compact('roles'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid User', true));
            $this->redirect(array('action'=>'index'));
        }
        if (!empty($this->data)) {
            if ($this->User->save($this->data)) {
                $this->_updateAro($this->User->field('role_id'));
                $this->Session->setFlash(__('The User has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->User->read(null, $id);
        }
        $roles = $this->User->Role->find('list');
        $this->set(compact('roles'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for User', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->del($id)) {
            $this->Session->setFlash(__('User deleted', true));
            $this->redirect(array('action'=>'index'));
        }
    }

     /**
     * Check to see if a User's role has changed and ARO table needs to be updated
     *
     * @return boolean true if role has changed and ARO table updated, otherwise false
     */
    function _updateAro($oldRoleId){
        if ($oldRoleId !== $this->data['User']['role_id']) {
            $aro =& $this->Acl->Aro;
            $user = $aro->findByForeignKeyAndModel($this->data['User']['id'], 'User');
            $role = $aro->findByForeignKeyAndModel($this->data['User']['role_id'], 'Role');
            // Save to ARO table
            $aro->id = $user['Aro']['id'];
            $aro->save(array('parent_id' => $role['Aro']['id']));
            return true;
        }
        return false;
    }

}
?>