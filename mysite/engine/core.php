<?php
// Первоначальный запуск (сессия, константы, окружение)
define('ROOT', dirname(__DIR__));

// ВКЛ показ ошибок
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Запускаем сессию
session_start();

require ROOT . '/config/main.php'; // Конфигурация
require ROOT . '/engine/render.php'; // Генерация шаблонов
require ROOT . '/engine/router.php'; // Маршрутизация
require ROOT . '/engine/logger.php'; // Логирование