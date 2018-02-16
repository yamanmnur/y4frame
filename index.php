<?php


	$token = explode('/', rtrim($_SERVER['REQUEST_URI'],'/'));
	//echo "<pre>";
	//print_r($_SERVER);
	//print_r($token);
	//echo "<pre>";


	require_once 'core/controller.php';

	require_once 'routing/routing.php';

	$controller = new Core_Controller();

	$routing = new routing();


