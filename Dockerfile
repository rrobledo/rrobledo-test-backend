FROM debian

######### Image Configuration #########
#First update Ubuntu and then install add-apt-repository.
RUN apt-get update 
RUN apt-get install -y supervisor

# install curl and php
RUN apt-get install -y curl php5 php5-cli

# install composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/bin/composer

# add application source file
RUN mkdir -p /var/www
ADD web /var/www
ADD supervisord-silex.conf /etc/supervisor/conf.d/supervisord-silex.conf

# install silex
# RUN cd /var/www/web && composer install

# run PHP server
CMD cd /var/www/;php -S 0.0.0.0:8000 -t /var/www app.php
