<?php

/*** UsersManager Setup ***/
Router::connect('/dbconfig',array('controller'=>'installer','action'=>'dbconfig','plugin'=>'users_manager'));
Router::connect('/install',array('controller'=>'installer','action'=>'install','plugin'=>'users_manager'));

/*** users login/logout ***/
Router::connect('/register',array('controller'=>'register','action'=>'index','plugin'=>'users_manager'));
Router::connect('/login',array('controller'=>'register','action'=>'login','plugin'=>'users_manager'));
Router::connect('/logout',array('controller'=>'register','action'=>'logout','plugin'=>'users_manager'));

?>