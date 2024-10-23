create database courseee
use courseee

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);


INSERT INTO courses (name) VALUES ('Laravel Programming'), ('DotNET Programming'), ('Spring Boot Programming'), ('Angular Programming');
