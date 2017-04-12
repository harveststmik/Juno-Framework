<?php

	$routes = null;
	if(isset($_GET['r']))
		$routes = explode('/',$_GET['r']);
	if(empty($routes)) {
		$controller = 'site';
		$action = 'index';
	}
	else if(count($routes)==1) {
		$controller = $routes[0];
		$action = 'index';
	}
	else {
		$controller = $routes[0];
		$action = $routes[1];
	}
	

	$controller = ucfirst($controller);

	$fileController = "./controller/{$controller}Controller.php";

	if(file_exists($fileController)) {
		require_once "$fileController";
		
		$cf = $controller.'Controller';
		$c = new $cf;
		$action = 'action'.ucfirst($action);
		$c->$action();
	}
	else {
		echo "404: file not found";
	}

?>