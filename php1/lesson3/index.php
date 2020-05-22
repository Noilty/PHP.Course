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

echo transliteration('привет, мир!', $alph);

/**
 * Функция транслитерации строк
 * @param $text
 * @param $alph
 * @return string
 */
function transliteration($text, $alph) {
//    $string = str_split($text, 2);
    $string = mb_str_split($text);
    foreach ($string as &$ru_symbol) {
        foreach ($alph as $ru => $en) {
            if ($ru_symbol === $ru) {
                $ru_symbol = $en;
            }
        }
    }
    return implode($string);
}

/**
 * str_split кириллица
 * @param $str
 * @return mixed
 */
function mb_str_split($str)
{
    preg_match_all('#.{1}#uis', $str, $out);
    return $out[0];
}
// 4 <<<
echo '<hr />';
// 5 >>>
echo spaceForUnderscores('Рома Кузьмин');

/**
 * Функция заменяет в строке пробелы на подчеркивания
 */
function spaceForUnderscores($str) {
    return str_replace(' ', '_', $str);
}
// 5 <<<
echo '<hr />';
// 6 >>>
$arrMenu = [
    'Menu 1' => [
        'FAQ' => 'Link-FAQ',
        'Helper' => 'Link-Helper',
        'About' => 'Link-About',
        'Contact' => 'Link-Contact'
    ],
    'Menu 2' => 'Link-Menu-2',
    'Menu 3' => 'Link-Menu-3'
]
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <ul>
    <? foreach ($arrMenu as $titleMenuOneLv => $titleMenuTwoLv) { ?>
        <li>
            <?= (is_array($titleMenuTwoLv)) ? "$titleMenuOneLv" : "<a href='$titleMenuTwoLv'>$titleMenuOneLv</a>"; ?>

            <? if (is_array($titleMenuTwoLv)) { ?>
                <ul>
                    <? foreach ($titleMenuTwoLv as $menuTitle => $menuLink) { ?>
                        <li><a href="<?= $menuLink ?>"><?= $menuTitle ?></a></li>
                    <? } ?>
                </ul>
            <? } ?>
        </li>
    <? } ?>
    </ul>
    </body>
    </html>
<?php
// 6 <<<