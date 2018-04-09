FROM chriswayg/apache-php

RUN apt-get -q -y update
RUN apt-get install -q -y php5-mcrypt

COPY web /var/www/html/
RUN rm /var/www/html/index.html

RUN chown www-data:www-data -R /var/www/html
RUN chmod 550 -R /var/www/html
