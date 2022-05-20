FROM php:7.4-fpm
MAINTAINER SHctt <SHcttMBG@protonmail.com>

# 进入工作目录
WORKDIR /usr/local/src

RUN apt-get update && apt-get install -y git curl wget cron vim locales

# 配置 git
RUN git config --global user.name "SHctt" \
   && git config --global user.email "SHcttMBG@protonmail.com"

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
  install-php-extensions mysqli redis mysqlnd curl gd mbstring xml xmlrpc opcache zip json bz2 bcmath pdo_mysql && \
  install-php-extensions @composer-2.0.2

# 把语言设置成简体中文
RUN dpkg-reconfigure locales && \
  locale-gen C.UTF-8 && \
  /usr/sbin/update-locale LANG=C.UTF-8
RUN echo 'zh_CN.UTF-8 UTF-8' >> /etc/locale.gen && \
  locale-gen
ENV LC_ALL C.UTF-8
ENV LANG zh_CN.UTF-8
ENV LANGUAGE zh_CN.UTF-8

COPY ./config/php.ini /usr/local/etc/php/conf.d/
COPY ./config/opcache-recommended.ini /usr/local/etc/php/conf.d/

#设置时区
#COPY /usr/share/zoneinfo/Asia/Shanghai /etc/localtime && echo 'Asia/Shanghai' >/etc/timezone
