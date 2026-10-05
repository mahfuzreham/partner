<?php

use Illuminate\\Http\\Request;

define('LARAVEL_START', microtime(true));

require dirname(__DIR__).'/partner/vendor/autoload.php';

$app = require_once dirname(__DIR__).'/partner/bootstrap/app.php';

$app->handleRequest(Request::capture());
