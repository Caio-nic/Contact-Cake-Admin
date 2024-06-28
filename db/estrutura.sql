CREATE DATABASE contacts_treinamento;
use contacts_treinamento
CREATE TABLE contacts (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `message` VARCHAR(200) NOT NULL
);
CREATE TABLE users (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(2000) NOT NULL
);