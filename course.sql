create database db_dao_linh_chi
use db_dao_linh_chi

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);


INSERT INTO courses (name) VALUES ('Laravel Programming'), ('DotNET Programming'), ('Spring Boot Programming'), ('Angular Programming');
