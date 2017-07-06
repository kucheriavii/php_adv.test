<?php  
//Визначимо з яким контроллером будемо працювати
#розберемо get запит. Якщо в змінній controller, яка передається get запитом знаходиться якесь значення то присвоюємо його змінній $controllerName, в іншому випадку присвоюємо змінній $controllerName значення Index
$controllerName = isset($_GET['controller'])?ucfirst($_GET['controller']) : 'Index';

#перевіримо, що знаходиться в змінній $controllerName
echo "Файл, що буде підключено (контроллер) = $controllerName <br>";
//Визначимо з якиою функцією будемо працювати
#все по анології з $controllerName
$actionName = isset($_GET['action']) ? $_GET['action'] : "index";

#Виведемо значення змінної $actionName
echo "Функція, що формує сторінку (екшн) = $actionName";

//Підключимо контроллер
include_once '../controllers/'.$controllerName.'Controller.php';