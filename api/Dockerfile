FROM php:5.6

MAINTAINER Dev-Lusaja <janoone52@gmail.com>


RUN mkdir -p /usr/local/opt/apps
WORKDIR /usr/local/opt/apps

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
	php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" &&\
	php composer-setup.php --install-dir=/usr/local/sbin --filename=composer && \
	php -r "unlink('composer-setup.php');"
 

RUN apt-get update && apt-get install -y git

RUN composer require slim/slim "^3.0"
RUN composer require slim/twig-view "^2.1"

COPY api/src/ /usr/local/opt/apps/api

EXPOSE 80