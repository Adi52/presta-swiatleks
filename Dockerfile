FROM prestashop/prestashop:latest
COPY --chown=www-data:www-data . /var/www/html
RUN rm -r /var/www/html/install/ && rm -r /var/www/html/admin/
RUN openssl req -x509 -newkey rsa:2048 -days 365 -nodes \
        -keyout /etc/ssl/private/apache-selfsigned.key \
        -out /etc/ssl/certs/apache-selfsigned.crt \
        -subj "/C=PL/ST=Pomorskie/L=Gdansk/O=Politechnika Gdanska/CN=localhost:8080"
RUN openssl dhparam -out /etc/ssl/certs/dhparam.pem 2048
COPY ssl-params.conf /etc/apache2/conf-available/ssl-params.conf
COPY default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
RUN a2enmod ssl \
        && a2enmod headers \
        && a2ensite default-ssl \
        && a2enconf ssl-params
