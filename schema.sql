<!-- This code goes into msql at phpyadmin so that it can create the table.->



CREATE DATABASE IF NOT EXISTS studentdb;
USE studentdb;

CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    age INT
);