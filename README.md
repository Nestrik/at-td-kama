# Подготовка окружения на Windows

Для работы потребуется: 
* java 
* php 7.1 или выше
* php composer
* driver для браузера и сам браузер

# Подготовка системы

Независимо от системы:
[Скачать хромдрайвер](https://sites.google.com/a/chromium.org/chromedriver/)
Прописать его в PATH параменную (возможно потребуется отметить запускаемым файлом - для *nix)
Скачать и установить браузер Chrome

## Windows
1. [Установить php не ниже 7.1](http://windows.php.net/download/)
2. Прописать корневую дирректорию в PATH
3. [Установить Composer](https://getcomposer.org/download/) (он сам пропишется в path, если этого не произошло: прописать вручную)
4. Снять комментирование в php.ini на строке ([подробнее](https://stackoverflow.com/questions/6382539/call-to-undefined-function-curl-init)):
```
extension=curl
```

## *nix (ubuntu)
TODO: описать

# Сборка проекта

В корне репозитория собираем все зависимости для проекта: 
```
composer install
```

# Конфигурирование тестов

Конфигурирование выполняется через редактирование файла:
```
tests/bootstrap.php
```
Можно настроить параметры запускаемого браузера (драйвер для этого браузера и браузер должны находится на машине, на которой будет работать selenium-server-standalone): 
По дефолту установлен запуск хрома: ` $capabilities = $cap->chrome(); ` - другие варианты можно посмотреть [тут](https://facebook.github.io/php-webdriver/master/DesiredCapabilities.html).

Если selenium-server-standalone запускается не на локальной машине, то необходимо указать адресс в этой переменной:
```
$driverHost = 'http://localhost:4444/wd/hub';
```

# Запуск тестов
1. Запустить сервер управления драйверами браузеров:
```
java -jar lib/selenium-server-standalone-2.53.0.jar
```

2. Запустить тест
```
"vendor/bin/phpunit" tests/SomeoneTest.php
```
Запуск всех тестов: 
```
"vendor/bin/phpunit" tests
```

