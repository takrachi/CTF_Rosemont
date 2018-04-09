# Salut Pat, je sais pas a partir de quelle image tu pars tes dockers mais feel free de la modifier. Pour celle-ci tant que j'ai Apache, PHP (n'importe quelle version) et mcrypt de php.
FROM chriswayg/apache-php

RUN apt-get -q -y update
RUN apt-get install -q -y php5-mcrypt

COPY web /var/www/html/
RUN rm /var/www/html/index.html

RUN chown www-data:www-data -R /var/www/html
RUN chmod 550 -R /var/www/html
