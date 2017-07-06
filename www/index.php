<?php  

include_once '../config/config.php'; //Файл з налаштуваннями
include_once '../library/mainFunctions.php'; //Основні функції
//Визначимо з яким контроллером будемо працювати
$controllerName = isset($_GET['controller'])?ucfirst($_GET['controller']) : 'Index';

//Визначимо з якиою функцією будемо працювати
$actionName = isset($_GET['action']) ? $_GET['action'] : "index";

loadPage($controllerName, $actionName);