FROM php:8.1.0-apache
WORKDIR /var/www/html
#Mod Rewrite
RUN a2enmod rewrite
RUN apt-get update -y && apt-get install -y libicu-dev unzip zip
#Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# RUN docker-php-ext-configure intl
RUN docker-php-ext-install gettext intl pdo_mysql
# RUN composer create-project --prefer-dist cakephp/app:~4.0 /cake-app
# Set the correct permissions
# Expose port 80
EXPOSE 80

# COPY /.env /var/www/html/config/.env
