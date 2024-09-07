FROM php:8.1-fpm as app

RUN apt-get update && apt-get install -y \
    zip \
    xml2 \
    libxslt-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    libicu-dev \
    libonig-dev \
    libbz2-dev \
    libcurl4-openssl-dev \
    libedit-dev \
    libsqlite3-dev \
    libssl-dev \
    libgmp-dev \
    libldb-dev \
    libldap2-dev \
    libmagic-dev \
    libpcre3-dev \
    libpng-dev \
    libpspell-dev \
    libreadline-dev \
    libsnmp-dev \
    libtidy-dev \
    libwebp-dev \
    libxpm-dev \
    libxslt1-dev \
    libzip-dev \
    && useradd www \
    && docker-php-ext-install \
    zip \
    xml \
    xsl \
    soap \
    pdo_pgsql \
    pgsql \
    mbstring \
    bcmath \
    intl \
    opcache \
    sockets
    
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY ./src /var/www
WORKDIR /var/www
RUN composer install --no-dev && chown -R www:www /var/www

CMD ["php-fpm"]