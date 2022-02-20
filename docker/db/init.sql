CREATE DATABASE IF NOT EXISTS homestead;

CREATE TABLE IF NOT EXISTS homestead.users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    PRIMARY KEY (id)
) ENGINE InnoDB DEFAULT CHARACTER SET utf8;

INSERT INTO homestead.users SET name='Taro Yamada';
INSERT INTO homestead.users SET name='Hanako Suzuki';
INSERT INTO homestead.users SET name='Ichiro Kobayashi';
INSERT INTO homestead.users SET name='Jiro Kobayashi';
