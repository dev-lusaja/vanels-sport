FROM php:5.4

MAINTAINER Dev-Lusaja <janoone52@gmail.com>


RUN mkdir -p /usr/local/opt/apps
WORKDIR /usr/local/opt/apps

RUN echo "Installing Composer"
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
	php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" &&\
	php composer-setup.php --install-dir=/usr/local/sbin --filename=composer && \
	php -r "unlink('composer-setup.php');"
 

RUN echo "Installing Git"
RUN apt-get update && apt-get install -y git


RUN echo "Installing SlimFramework" 
RUN composer create-project slim/slim-skeleton vanels

EXPOSE 8080