FROM	debian:buster

RUN		apt-get update
RUN		apt-get install -y nginx \
                openssl

RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
       -out /etc/nginx/ssl/kortolan.crt \
       -keyout /etc/nginx/ssl/kortolan.key \
       -subj "/C=FR/ST=Nice/L=Nice/O=42 Nice/OU=kortolan/CN=kortolan/"

COPY ./config/default.conf /etc/nginx/conf.d

RUN mkdir -p /run/nginx

EXPOSE	443

CMD ["nginx", "-g", "daemon off;"]