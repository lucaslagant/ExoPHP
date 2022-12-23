DROP DATABASE IF EXISTS auth;

CREATE DATABASE auth;

USE auth;

CREATE TABLE user (
    user_id     INT PRIMARY KEY AUTO_INCREMENT,
    user_email   VARCHAR(100),
    user_password VARCHAR(100)
);