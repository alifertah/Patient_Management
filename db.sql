CREATE DATABASE patient_management;

USE patient_management;

CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    address VARCHAR(255) NOT NULL,
    doctor VARCHAR(255) NOT NULL,
    deparment VARCHAR(255) NOT NULL,
);
