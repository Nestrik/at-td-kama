<?php
require_once __DIR__.'/support/BaseExample.php';
require_once __DIR__.'/../vendor/autoload.php';

# Определяет параметры запускаемого браузера
# https://facebook.github.io/php-webdriver/master/DesiredCapabilities.html

#$options = new ChromeOptions();
#$options->addArguments(array('--headless', '--disable-gpu'));

$capabilities = DesiredCapabilities::chrome();
#$capabilities->setCapability(ChromeOptions::CAPABILITY, $options);

# Определяет адресс хоста selenium-remote
$driverHost = 'http://localhost:4444/wd/hub';
