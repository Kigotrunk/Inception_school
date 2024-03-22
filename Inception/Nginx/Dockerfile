FROM debian:bookworm

RUN apt-get update && \
    apt-get install -y nginx openssl && \
    rm -rf /var/lib/apt/lists/*

COPY nginx.conf /etc/nginx/nginx.conf

RUN mkdir /etc/nginx/ssl && \
    openssl req -new -newkey rsa:4096 -sha256 -days 365 -nodes \
    -out /etc/nginx/ssl/nginx.crt \
    -keyout /etc/nginx/ssl/nginx.key \
    -subj "/C=FR/ST=Paris/L=Paris/O=MyCompany/OU=Dev/CN=mydomain.com"

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
