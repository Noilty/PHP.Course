<?php
// Первоначальный запуск (сессия, константы, окружение)
define('ROOT', dirname(__DIR__));
define('ORDER_STATUS_READY', 1);
define('ORDER_STATUS_NEW', 0);
define('DEFAULT_TEMPLATE', 'default');

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
require ROOT . '/engine/database.php'; // База данных
require ROOT . '/engine/gallery.php'; // Галлерея
require ROOT . '/engine/auth.php'; // Галлерея