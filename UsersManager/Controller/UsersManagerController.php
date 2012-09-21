<?php 



class UsersManagerController extends UsersManagerAppController {

	public $dbConnection = 'default';

	public function beforeFilter() 
	{
	    
	        if (!file_exists(APP . 'Config' . DS . 'database.php')) {
				
				$this->redirect(array('controller'=>'Installer','action'=>'dbconfig','plugin'=>'users_manager'),301,true);
		
			} else {
				App::uses('ConnectionManager','Model');
				$connected = ConnectionManager::getDataSource($this->dbConnection);
				
				if(!$connected->isConnected())
					$this->redirect(array('controller'=>'Installer','action'=>'install','plugin'=>'users_manager'),301,true);
			}

	}

	public function index() {



	}

	
}
