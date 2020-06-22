<?php
/**
 * Файл с функциями для работы с шаблонами страниц
 */

/**
 * Генерация шаблона страниц для отображения
 * @param string $template
 * @param array $data
 * @param bool $withLayout
 * @param string $layout
 * @return mixed
 */
function render(string $template, array $data = [], bool $withLayout = true, string $layout = 'main') {
    global $config;

    // Путь к шаблонам
    $templates = [
        'layout' => "{$config['app']['templatesPath']}/" . DEFAULT_TEMPLATE . "/layouts/{$layout}.php",
        'page' => "{$config['app']['templatesPath']}/" . DEFAULT_TEMPLATE . "/pages/{$template}.php"
    ];

    // Загружаем настройки приложения из глобального доступа
    $data['config'] = $config['app'];

    // Подгружаем содержимое шаблона
    $pageView = getTemplateContent($templates['page'], $data);

    // Подключаем основной макет
    if ($withLayout) {
        $data['content'] = $pageView;

        return getTemplateContent($templates['layout'], $data);
    } else {
        return $pageView;
    }
}

/**
 * Чтение шаблона из буфера вывода
 * @param string $filePath
 * @param array $data
 * @return false|string HTML-код шаблона
 */
function getTemplateContent(string $filePath, array $data) {
    // Открываем буфер вывода
    ob_start();

    // Извлекаем переменные из переданного массива
    // ['user' => 'admin', 'passwd' => '12345'] ==========> $user = 'admin'; $passwd = '12345';
    extract($data);

    // Выполняем файл шаблона
    include $filePath;

    // Возвращаем данные из буфура обмена
    return ob_get_clean();
}

/**
 * Функция для вывода JSON в ответ на AJAX-запрос
 * @param $data
 */
function renderJson($data) {
    header('Content-type: application/json');
    echo json_encode($data);
}
