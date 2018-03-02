<?php
require_once __DIR__.'/support/BaseTest.php';
require_once __DIR__.'/../vendor/autoload.php';

$cap = new DesiredCapabilities();

# Параметры запускаемого браузера.
# https://facebook.github.io/php-webdriver/master/DesiredCapabilities.html
$capabilities = $cap->chrome();

# Адресс хоста selenium-remote
$driverHost = 'http://localhost:4444/wd/hub';
