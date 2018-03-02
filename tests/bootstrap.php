<?php
require_once __DIR__.'/support/BaseExample.php';
require_once __DIR__.'/../vendor/autoload.php';

$cap = new DesiredCapabilities();

# Определяет параметры запускаемого браузера
# https://facebook.github.io/php-webdriver/master/DesiredCapabilities.html
$capabilities = $cap->chrome();

# Определяет адресс хоста selenium-remote
$driverHost = 'http://localhost:4444/wd/hub';
