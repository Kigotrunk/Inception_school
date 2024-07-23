FROM debian:buster

RUN apt-get update
RUN apt-get install -y mariadb-server \
    mariadb-client \
    vim \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir -p /var/run/mysqld \
&& chown -R mysql:mysql /var/run/mysqld \
&& chmod 777 /var/run/mysqld

EXPOSE 3306

COPY ./config/conf.sh /usr/local/bin/
COPY ./config/bd.sql /usr/local/bin/
RUN chmod +x /usr/local/bin/conf.sh
RUN chmod +x /usr/local/bin/bd.sql

ENTRYPOINT [ "/usr/local/bin/conf.sh" ]

CMD ["mysqld", "--bind-address=0.0.0.0"]