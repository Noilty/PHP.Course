<?php
// 1 >>>
$a = 3;
$b = -1;

if ( $a > 0 && $b > 0 ) {
    echo '(-) ' . $result = $a - $b;
} else if ( $a < 0 && $b < 0 ) {
    echo '(*) ' . $result = $a * $b;
} else {
    echo '(+) ' . $result = $a + $b;
}
unset($a, $b);
// 1 <<<
echo '<hr />';
// 2 >>>
$a = rand(1, 15);
switch ($a) {
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    case 4:
        echo 4;
        break;
    case 5:
        echo 5;
        break;
    case 6:
        echo 6;
        break;
    case 7:
        echo 7;
        break;
    case 8:
        echo 8;
        break;
    case 9:
        echo 9;
        break;
    case 10:
        echo 10;
        break;
    case 11:
        echo 11;
        break;
    case 12:
        echo 12;
        break;
    case 13:
        echo 13;
        break;
    case 14:
        echo 14;
        break;
    case 15:
        echo 15;
        break;
}
// 2 <<<
echo '<hr />';
// 3 >>>
/**
 * Сложение
 * @param $param1
 * @param $param2
 * @return mixed
 */
function addition($param1, $param2) {
    return $param1 + $param2;
}

/**
 * Вычитание
 * @param $param1
 * @param $param2
 * @return mixed
 */
function subtraction($param1, $param2) {
    return $param1 - $param2;
}

/**
 * Умножение
 * @param $param1
 * @param $param2
 * @return float|int
 */
function multiplication($param1, $param2) {
    return $param1 * $param2;
}

/**
 * Деление
 * @param $param1
 * @param $param2
 * @return float|int
 */
function division($param1, $param2) {
    return $param1 / $param2;
}
// 3 <<<

// 4 >>>
/**
 * Простой калькулятор
 * @param $param1
 * @param $param2
 * @param string $operation
 * @return float|int|mixed|string
 */
function mathOperation($param1, $param2, $operation = '+') {
    switch ($operation) {
        case '+':
            return addition($param1, $param2);
            break;
        case '-':
            return subtraction($param1, $param2);
            break;
        case '*':
            return multiplication($param1, $param2);
            break;
        case '/':
            return division($param1, $param2);
            break;
        default:
            return 'Error';
            break;
    }
}
echo mathOperation(5, 10, '/');
// 4 <<<
echo '<hr />';
// 5 >>>
echo $date = date('Y');
// 5 <<<
echo '<hr />';
// 6 >>>
function power($val, $pow) {
    return ($pow == 1) ? $val : $val * power($val, $pow - 1);
}
echo power(5, 2);
// 6 <<<
echo '<hr />';
// 7 >>>
$hour = date('H');
$minutes = date('i');
$array = [
    "hour" => ["час", "часа", "часов"],
    "minutes" => ["минута", "минуты", "минут"]
];
echo $hour . ' ' . getTime($hour, $array['hour']) . ' ' . $minutes . ' ' . getTime($minutes, $array['minutes']);

function getTime($number, $array) {
    $keys = [2, 0, 1, 1, 1, 2];
    $mod = $number % 100;
    $array_key = ($mod > 7 && $mod < 20) ? 2 : $keys[min($mod % 10, 5)];
    return $array[$array_key];
}
// 7 <<<