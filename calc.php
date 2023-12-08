<?php
    if (empty($_GET)){
        return 'Ничего не передано';
    }

    if (empty($_GET['operation'])){
        return 'Неизвестная операция';
    }

    if (empty($_GET['x1'])){
        return 'Первое значение не валидно';
    }

    if (empty($_GET['x2'])){
        return 'Второе значение не валидно';
    }

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];
$expressions = $x1 . '' . $_GET['operation'] . '' . $x2 . ' = ';

switch ($_GET['operation']){
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        $result = $x1 / $x2;
        break;
    case '**':
        $result = $x1 ** $x2;
        break;
    default:
        return 'Операция не поддерживается';
}
return $expressions . $result;
?>