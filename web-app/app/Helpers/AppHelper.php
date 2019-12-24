<?php

if ( !function_exists('full_title') )
{
  function full_title($page_title = ''){
    $base_title = "Laravel Tutorial Sample App";
    if (empty($page_title))
        return $base_title;
    else
        return $page_title . " | " . $base_title;
  }
}

if ( !function_exists('is_active_controllers') )
{
  function is_active_controllers($controller_names){
  	$routeArray = app('request')->route()->getAction();
        $controllerAction = class_basename($routeArray['controller']);
        list($controller, $action) = explode('@', $controllerAction);
    // foreach ($controller_names as &$name) {
	    if ($controller == $controller_names) {
	    	return "active";
	    }
	    else {
	    	return null;
	    }
	// }
  }
}