<?php

namespace Web\Project\Core;

class Router
{
	public static function run()
	{
		$controller = 'index';
		$action = 'index';
		$params = null;
		$uri = $_SERVER['REQUEST_URI'];

		$routes = explode('/', $uri);
		if (!empty($routes[1])) {
			$controller = $routes[1];
		}
		if (!empty($routes[2])) {
			$action = $routes[2];
		}
		if (!empty($routes[3])) {
			$params = $routes[3];
		}
		$controller = 'Web\Project\Controllers\\' . ucfirst($controller) . 'Controller';
		$action = strtolower($action) . 'Action';
		$controller = new $controller();
		$controller->$action($params);
	}
}
