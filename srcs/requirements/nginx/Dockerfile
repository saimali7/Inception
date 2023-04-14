FROM debian:buster

RUN apt-get update && apt-get install -y nginx && apt-get install -y openssl
RUN mkdir /etc/nginx/ssl/ && openssl req -new -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/MyCertificate.crt -keyout /etc/nginx/ssl/MyKey.key -subj "/C=AE/ST=AD/L=AD/O=42 School/OU=saim/CN=localhost/"
COPY nginx.conf /etc/nginx/sites-enabled/default

COPY ./tools/index.html /var/www/

EXPOSE 443

CMD [ "nginx", "-g", "daemon off;" ]