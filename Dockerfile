FROM php:8.2.0-apache

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update \
      && apt-get -y install libfreetype6-dev libjpeg62-turbo-dev libpng-dev libzip-dev\
      && docker-php-ext-configure gd --with-freetype --with-jpeg \
      && docker-php-ext-install -j$(nproc) gd \
      && docker-php-ext-install zip

RUN apt install -y golang-go
RUN apt install -y git

RUN go get github.com/mailhog/mhsendmail \
 && mv /root/go/bin/mhsendmail /usr/local/bin