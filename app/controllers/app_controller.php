<?php
class AppController extends Controller {
    var $helpers = array('Html', 'Form', 'Text', 'Number', 'Time', 'Javascript');
    var $components = array('Acl', 'Auth', 'Pear');
    var $uses = array('Role', 'User');
    var $paginate = array('limit' => 10);

    function beforeFilter(){
        if(Configure::read('debug') > 0){
            $this->_buildAcl();
            $this->_setPermissions();
        }
        $this->Auth->actionPath = 'controllers/';
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'home', 'action' => 'index');
        $this->Auth->userScope = array('User.active' => 1);
        $this->Auth->allowedActions = array('index');
    }
    function beforeRender(){
        $this->set('authUser', $this->Session->read('Auth.User.username'));
        $id = $this->Session->read('Auth.User.role_id');
        if(!empty($id)){
            $role = $this->Role->find('first', array('fields' => 'Role.name', 'conditions' => array('Role.id' => $id)));
            $this->set('authRole', $role['Role']['name']);

            $menu = array('Categories' => 'LinkCategories', 'Links' => 'Links');
            $this->set('primaryLinks', $menu);
        }
    }

    /**
     * Initalize the permissions
     */
    function _setPermissions() {
        $role =& $this->Role;
        //Allow admins to everything
        $role->id = 1;
        $this->Acl->allow($role, 'controllers');
    }
/**
 * Rebuild the Acl based on the current controllers in the application
 *
 * @return void
 */
    function _buildAcl() {
        $log = array();

        $aco =& $this->Acl->Aco;
        $root = $aco->node('controllers');
        if (!$root) {
            $aco->create(array('parent_id' => null, 'model' => null, 'alias' => 'controllers'));
            $root = $aco->save();
            $root['Aco']['id'] = $aco->id;
            $log[] = 'Created Aco node for controllers';
        } else {
            $root = $root[0];
        }

        App::import('Core', 'File');
        $Controllers = Configure::listObjects('controller');
        $appIndex = array_search('App', $Controllers);
        if ($appIndex !== false ) {
            unset($Controllers[$appIndex]);
        }
        $baseMethods = get_class_methods('Controller');
        $baseMethods[] = 'buildAcl';


        $Plugins = $this->_get_plugin_controller_names();
        $Controllers = array_merge($Controllers, $Plugins);

        // look at each controller in app/controllers
        foreach ($Controllers as $ctrlName) {
            App::import('Controller', $ctrlName);
            $ctrlclass = $ctrlName . 'Controller';
            $methods = get_class_methods($ctrlclass);

            // find / make controller node
            $controllerNode = $aco->node('controllers/'.$ctrlName);
            if (!$controllerNode) {
                $aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $ctrlName));
                $controllerNode = $aco->save();
                $controllerNode['Aco']['id'] = $aco->id;
                $log[] = 'Created Aco node for '.$ctrlName;
            } else {
                $controllerNode = $controllerNode[0];
            }

            //clean the methods. to remove those in Controller and private actions.
            foreach ($methods as $k => $method) {
                if (strpos($method, '_', 0) === 0) {
                    unset($methods[$k]);
                    continue;
                }
                if (in_array($method, $baseMethods)) {
                    unset($methods[$k]);
                    continue;
                }
                $methodNode = $aco->node('controllers/'.$ctrlName.'/'.$method);
                if (!$methodNode) {
                    $aco->create(array('parent_id' => $controllerNode['Aco']['id'], 'model' => null, 'alias' => $method));
                    $methodNode = $aco->save();
                    $log[] = 'Created Aco node for '. $method;
                }
            }
        }
        // debug($log);
    }

/**
     * Get the names of the plugin controllers ...
     *
     * This function will get an array of the plugin controller names, and
     * also makes sure the controllers are available for us to get the
     * method names by doing an App::import for each plugin controller.
     *
     * @return array of plugin names.
     *
     */
    function _get_plugin_controller_names(){
        App::import('Core', 'File', 'Folder');
        $paths = Configure::getInstance();
        $folder =& new Folder();
        // Change directory to the plugins
        $folder->cd(APP.'plugins');
        // Get a list of the files that have a file name that ends
        // with controller.php
        $files = $folder->findRecursive('.*_controller\.php');
        // Get the list of plugins
        $Plugins = Configure::listObjects('plugin');

        // Loop through the controllers we found int the plugins directory
        foreach($files as $f => $fileName)
        {
            // Get the base file name
            $file = basename($fileName);

            // Get the controller name
            $file = Inflector::camelize(substr($file, 0, strlen($file)-strlen('_controller.php')));

            // Loop through the plugins
            foreach($Plugins as $pluginName){
                if (preg_match('/^'.$pluginName.'/', $file)){
                    // First get rid of the App controller for the plugin
                    // We do this because the app controller is never called
                    // directly ...
                    if (preg_match('/^'.$pluginName.'App/', $file)){
                        unset($files[$f]);
                    } else {
                        if (!App::import('Controller', $pluginName.'.'.$file))
                        {
                            debug('Error importing '.$file.' for plugin '.$pluginName);
                        }

                        /// Now prepend the Plugin name ...
                        // This is required to allow us to fetch the method names.
                        $files[$f] = $file;
                    }
                    break;
                }
            }
        }
        return $files;
    }


}
?>
