<?php


Router::connect('/dbconfig',array('controller'=>'Installer','action'=>'dbconfig','plugin'=>'users_manager'));

Router::connect('/install',array('controller'=>'Installer','action'=>'install','plugin'=>'users_manager'));


Router::connect('/register',array('controller'=>'register','action'=>'index','plugin'=>'users_manager'));
Router::connect('/login',array('controller'=>'register','action'=>'login','plugin'=>'users_manager'));
Router::connect('/logout',array('controller'=>'register','action'=>'logout','plugin'=>'users_manager'));