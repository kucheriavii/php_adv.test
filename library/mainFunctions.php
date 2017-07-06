<?php 
//Функція підгрузки необхідного контроллера
function loadPage($controllerName, $actionName = 'index'){
	include_once PathPrefix . $controllerName . PathPostfix;

	$function = $actionName . "Action";
	$function();
}
