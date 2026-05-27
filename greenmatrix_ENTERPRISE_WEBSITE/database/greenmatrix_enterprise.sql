
CREATE DATABASE greenmatrix_enterprise;
USE greenmatrix_enterprise;

CREATE TABLE admin(
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100),
password VARCHAR(255)
);

CREATE TABLE products(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255),
description TEXT
);

CREATE TABLE inquiries(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
message TEXT
);
