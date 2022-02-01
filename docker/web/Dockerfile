FROM php:7.4-apache

# Dockerfile内のRUNで実行するコマンドのオプションを指定
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

RUN apt-get update && \
  docker-php-ext-install pdo_mysql

# apacheのデフォルトのDocumentRootにphpファイルをコピー
COPY ./src /var/www/html

WORKDIR /var/www/html
