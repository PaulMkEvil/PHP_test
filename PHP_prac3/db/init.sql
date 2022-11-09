CREATE DATABASE IF NOT EXISTS appDB;

CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;
USE appDB;

DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS toys;

CREATE TABLE IF NOT EXISTS users
(
    ID       INT(11) NOT NULL AUTO_INCREMENT,
    name     VARCHAR(20) CHARACTER SET ascii NOT NULL,
    password VARCHAR(45) CHARACTER SET ascii NOT NULL,
    PRIMARY KEY (ID)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS toys
(
    ID          INT(10) NOT NULL AUTO_INCREMENT,
    name        VARCHAR(32)  NOT NULL,
    description VARCHAR(256) NOT NULL,
    price       INT(6) NOT NULL,
    PRIMARY KEY (ID)
);

INSERT INTO users (name, password)
VALUES ('admin', '{SHA}0DPiKuNIrrVmD8IUCuw1hQxNqZc=');


INSERT INTO toys (name, description, price)
VALUES ('LEGO tank', 'Crazy tank', 1500);

INSERT INTO toys (name, description, price)
VALUES ('Woody Cowboy', 'Character from toy story',
        3500);

INSERT INTO toys (name, description, price)
VALUES ('Buzz Lightyear', 'Character from toy story', 3500);

INSERT INTO toys (name, description, price)
VALUES ('Luke Skywalker', 'Character from star wars', 5500);

INSERT INTO toys (name, description, price)
VALUES ('Darth Vader',
        'Character from star wars',
        6000);

INSERT INTO toys (name, description, price)
VALUES ('Obi Wan Kenobi', 'Character from star wars', 5500);

INSERT INTO toys (name, description, price)
VALUES ('Anakin Skywalker', 'Character from star wars', 5500);