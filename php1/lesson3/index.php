<?php
header('Content-Type: text/html; charset=utf-8');
// 1 >>>
$i = 1;
while ($i < 100) {
    if (is_int($i/3)) {
        echo $i . '<br />';
    }
    $i++;
}
// 1 <<<
echo '<hr />';
// 2 >>>
echo do_while(0, 11);
function do_while($num_start, $num_end) {
    do {
        if ($num_start === 0) {
            echo "{$num_start} - Это ноль<br />";
        } else {
            echo (($num_start % 2) !== 0) ? "{$num_start} - Нечётное число<br />" : "{$num_start} - Чётное число<br />" ;
        }
        $num_start++;
    } while ($num_start < $num_end);
}
// 2 <<<
echo '<hr />';
// 3 >>>
$array = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт'
    ],
    'Рязанская область' => [
        'Касимов',
        'Рыбное',
        'Скопин',
        'Шацк'
    ]
];
foreach ($array as $region => $cities) {
    echo "<b>{$region}</b>:<br />";
    foreach ($cities as $city) {
        echo "{$city}, ";
    }
    echo "<br />";
}
// 3 <<<
echo '<hr />';
// 4 >>>
$alph = [
    'а' => 'a', 'б' => 'b', 'в' => 'v',
    'г' => 'g', 'д' => 'd', 'е' => 'e',
    'ё' => 'ë', 'ж' => 'ž', 'з' => 'z',
    'и' => 'i', 'й' => 'j', 'к' => 'k',
    'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'h', 'ц' => 'c',
    'ч' => 'č', 'ш' => 'š', 'щ' => 'ŝ',
    'ъ' => '"', 'ы' => 'y', 'ь' => '`',
    'э' => 'è', 'ю' => 'û', 'я' => 'â',
    '!', ',', ' '
];

var_dump(transliteration('привет, мир!', $alph));

/**
 * Функция транслитерации строк
 * @param $text
 * @param $alph
 * @return string
 */
function transliteration($text, $alph) {
    $string = str_split($text, 2);
    var_dump($string);

}
// 4 <<<
