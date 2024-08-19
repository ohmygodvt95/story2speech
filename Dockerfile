FROM php:8.3-rc-fpm

WORKDIR /var/www/html

ARG WWWGROUP=1000
ARG WWWUSER=1000

ENV TZ="Asia/Ho_Chi_Minh"

RUN apt-get update && \
    apt-get install -y --force-yes --no-install-recommends \
    supervisor \
    nginx \
    unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY ./start-container /usr/local/bin/start-container
RUN chmod +x /usr/local/bin/start-container

COPY . /var/www/html

RUN composer install

EXPOSE 80

ENTRYPOINT ["/usr/local/bin/start-container"]
