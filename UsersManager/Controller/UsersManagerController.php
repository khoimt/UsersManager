<?php 


class UsersManagerController extends UsersManagerAppController {
	public $components = array('Paginator');
	public $helpers = array('Paginator');

	public function beforeFilter() 
	{
	    
	        if (!file_exists(APP . 'Config' . DS . 'database.php')) {
				
				$this->redirect(array('controller'=>'installer','action'=>'dbconfig','plugin'=>'users_manager'),301,true);
		
			} else {
				App::uses('ConnectionManager','Model');
				$connected = ConnectionManager::getDataSource(Configure::read('UsersManager.dbConnection'));
				
				if(!$connected->isConnected())
					$this->redirect(array('controller'=>'installer','action'=>'install','plugin'=>'users_manager'),301,true);
			} 

			$this->__init();
	}

	
	public function __init()
	{
		$this->_userModel = Configure::read('UsersManager.UserTable'); 
		$this->Paginator->settings = array($this->_userModel => array('limit'=>20,'maxLimit'=>30));
	}
	
	
	public function __isAdminLoggedIn()
	{
	
		$failedFlag = false;
		if($this->Session->read( Configure::write('UsersManager.PHPSessionID')))
		{
			$failedFlag =  true;
		}
	
		return $failedFlag ;
	}
	
	
	public function __isAdminLogout()
	{
		if($this->Session->read(Configure::write('UsersManager.PHPSessionID')))
		{
			$this->Session->del(Configure::write('UsersManager.PHPSessionID'));
		}
	}
	
	
	public function index()
	{
	
		$this->set('User',$this->paginate($this->_userModel));
	
	}
	
	public function update()
	{
	
		
	
	}
	
	public function edit()
	{
	
		
	
	}
	
	public function delete()
	{
	
		
	
	}
	
}

?>