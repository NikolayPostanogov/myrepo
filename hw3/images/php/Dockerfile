# Для начала указываем исходный образ, он будет использован как основа
FROM php:7.4-fpm

# RUN выполняет идущую за ней команду в контексте нашего образа.
# В данном случае мы установим некоторые зависимости и модули PHP.
# Для установки модулей используем команду docker-php-ext-install.
# На каждый RUN создается новый слой в образе, поэтому рекомендуется объединять команды.
RUN apt update && apt install -y \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
	libpng-dev \
	libonig-dev \
	libzip-dev \
	vim \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Указываем рабочую директорию для PHP
WORKDIR /var/www

# Запускаем контейнер
CMD ["php-fpm"]
