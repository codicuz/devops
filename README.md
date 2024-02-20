# Тестовое для DevOps

## Описание
Необходимо написать конфигурацию docker (docker-compose.yml) для чистого [laravel](https://lumen.laravel.com/docs/9.x#installing-lumen) проекта со всеми зависимостями.
Контейнеры должны быть в одной сети и общаться при помощи драйвера bridge. 
В файлах `nginx.conf` и `php-fpm.conf` лежат конфигурации, которые должны быть использованы в соответствующих контейнерах. Предусмотрите возможность изменения кода проекта без пересборки.

❗️❗️❗️ВАЖНО❗️❗️❗️
Проект должен собираться и стартовать без дополнительных шаманств при помощи:

```
docker-compose up --build
```

--- 
## 1. Используемые сервисы:

>	- nginx (входящий и внутренний 80)
>	- php-fpm (внутренний 9000)
>	- supervisor
>	- postgresql (внутренний 5432)
>	- rabbitmq (внутренний 5672)
>
> *В скобках указаны порты*

## 2. Дополнительный софт

> Установить [composer](https://getcomposer.org/download/) и при сборке проекта запустить `composer install --no-dev`

## 3. php расширения для проекта:

> - zip
> - xml
> - xsl
> - soap
> - pdo_pgsql
> - pgsql
> - mbstring
> - bcmath
> - intl
> - opcache
> - sockets
