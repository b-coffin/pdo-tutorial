FROM mysql:5.7

# コンテナ起動時にsqlを実行
COPY ./docker/db/init.sql /docker-entrypoint-initdb.d/
