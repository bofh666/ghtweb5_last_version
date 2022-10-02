# Сайт + кабинет для управления Lineage2 java серверами

Проект закрыт 2019.10.13<br>
В этом репозитории оставляю самую последнюю версию цмс.

## Требования:
- Apache2
- mod_rewrite
- PHP 7.x
- php-pdo
- php-mysql
- php-mcrypt
- php-mbstring
- php-gd
- php-xml

> The mcrypt extension has been abandonware for nearly a decade now, and was also fairly complex to use. It has therefore been deprecated in favour of OpenSSL, where it will be removed from the core and into PECL in PHP 7.2.

## Установка:
- скачать архив или воспользоваться git clone<br>
- распаковать на ваш веб сервер<br>
- открыть в браузере, далее делать всё как там написано

## Режим разработчика
- В файле /public/index.php на 23 строке добавьте свой IP в массив.
Появится профайлер внизу страницы, отключится кэщ и будет доступен gii

## Разное
- Темы находятся в папке /themes/ Что-бы создать свою, надо скопировать ghtweb и сохранить с другим именем
- Логи (ошибки, нотисы и т.д) находятся в папке /protected/runtime/application.log
- Веб сервер должен смотреть в папку /public
- если появляются ошибки 404, проверить AllowOverried -- должно быть All
- Пароль пользователя БД должен быть задан с использованием плагина [mysql_native_password](https://mariadb.com/kb/en/authentication-plugin-mysql_native_password/)
- При использовании обратного прокси-сервера с терминированием на нем HTTPS важно передавать схему в заголовке X-Forwarded-Proto, например (для nginx):
```
    location / {
        proxy_pass http://192.168.1.105;
        proxy_set_header Host $host;
        proxy_set_header X-Forwarded-Proto $scheme;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;  
    }
```
- Дату старта сервера для счетчика обратного отсчета можно указать в файле themes/ghtweb/views/layouts/master.php (внизу)
- Есть проблема с созданием донат магазина, лечится примерно так:
```
yum -y install composer
cd $GHTWEB_ROOT
composer upgrade stichoza/google-translate-php
composer require stichoza/google-translate-php
sed -i 's/TranslateClient/GoogleTranslate/g' protected/modules/backend/models/forms/ShopCategoryForm.php
```
- для отображения иконок нужно распаковать файл icons_2014_07_12.zip в public/images/items
