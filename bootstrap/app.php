<?php
declare(strict_types=1);

use App\Core\Application;

require_once __DIR__ . '/../vendor/autoload.php';

defined('APP_VERSION') || define('APP_VERSION', Application::VERSION);
