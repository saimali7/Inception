FROM debian:buster

RUN apt-get update && apt-get install -y nginx
COPY nginx.conf /etc/nginx/nginx.conf
COPY ./html/index.html /usr/share/nginx/html/
EXPOSE 443

CMD [ "nginx", "-g", "daemon off;" ]