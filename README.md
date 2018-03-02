# Подготовка окружения на Windows

Для работы потребуется: 
* java 
* php 7.1 или выше
* php composer
* driver для браузера и сам браузер

# Подготовка системы

## Windows
1. [Установить php не ниже 7.1](http://windows.php.net/download/)
2. Прописать корневую дирректорию в PATH
3. [Установить Composer](https://getcomposer.org/download/) (он сам пропишется в path, если этого не произошло: прописать вручную)
4. Снять комментирование в php.ini на строке ([подробнее](https://stackoverflow.com/questions/6382539/call-to-undefined-function-curl-init)):
```
extension=curl
```

## *nix (ubuntu)


# Сборка проекта

В корне репозитория собираем все зависимости для проекта: 
```
composer install
```

# Конфигурирование тестов

TODO: описать конфигурирование и возможные конфигурации

# Запуск тестов
1. Запустить сервер управления драйверами браузеров:
```
java -jar lib/selenium-server-standalone-2.53.0.jar
```
или для хрома:
```
java -jar lib/selenium-server-standalone-2.53.0.jar -Dwebdriver.chrome.driver=D:/chromedriver/chromedriver.exe
```

2. Запустить тест
```
"vendor/bin/phpunit" tests/SomeoneTest.php
```
