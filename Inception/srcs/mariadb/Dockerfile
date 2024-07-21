FROM debian:buster

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y mariadb-server

COPY config/50-server.conf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY config/conf.sh /conf.sh
RUN chmod +x /conf.sh

ENTRYPOINT ["bash", "auto_config.sh"]
EXPOSE 3306