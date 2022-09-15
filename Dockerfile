FROM composer AS dependencies
WORKDIR /app
COPY . /app/
RUN composer install && composer dump-autoload --optimize

FROM php
WORKDIR /app
COPY --from=dependencies /app /app
ENTRYPOINT [ "php", "/app/stringifier.php" ]
