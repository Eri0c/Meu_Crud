<?php 


   
    

    define('INCLUDE_PATH_STATIC','http://localhost/Meucrud/Views/pages/');
    define('INCLUDE_PATH','http://localhost/meucrud/');

	require_once 'Application.php';
	require_once 'Views/MainView.php';
	require_once 'MySql.php';
	require_once 'Controllers/UsuariosController.php';
    
    $app = new Application();

    $app->run();
    
