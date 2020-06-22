<?php
/**
 * Файл с функциями для работы с логами
 */

/**
 * Функция для логирования сообщений в директорию logs
 *
 * @param $message
 * @param string $type
 */
function systemLog($message, string $type = 'info')
{
    global $config;

    // Приводим тип сообщения в нижний регистр
    $type = mb_strtolower($type);

    // Устанавливаем путь до логов
    $logPath = $config['app']['logPath'] . "/{$type}.log";

    // Если переданный параметр не строка
    if (is_string($message)) {
        // Переводим в строковый формат вывода
        $message = print_r($message, true);
    }

    // Генерируем строку лог-сообщения
    $output = "[".date('Y-m-d H:i:s')."] ".mb_strtoupper($type).": ".$message."\n"; // [0000-00-00 00:00:00] type: message

    // Если директория логов не создана
    if (!is_dir(dirname($logPath))) {
        mkdir(dirname($logPath), 0644, true);
    }

    // Добавляем стоку в файл
    file_put_contents($logPath, $output, FILE_APPEND);
}
