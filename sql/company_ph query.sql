CREATE DATABASE ph_company;
USE ph_company;

CREATE TABLE Office (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    contactnum VARCHAR(20),
    email VARCHAR(255),
    address TEXT,
    city VARCHAR(100),
    country VARCHAR(50),
    postal VARCHAR(20)
);

CREATE TABLE Employee (
    id INT PRIMARY KEY AUTO_INCREMENT,
    last_name VARCHAR(100),
    first_name VARCHAR(100),
    office_id INT,
    address TEXT,
    FOREIGN KEY (office_id) REFERENCES Office(id) ON DELETE SET NULL
);

CREATE TABLE Transaction (
    id INT PRIMARY KEY AUTO_INCREMENT,
    employee_id INT,
    office_id INT,
    datelog DATETIME,
    action VARCHAR(100),
    remarks TEXT,
    documentcode VARCHAR(50),
    FOREIGN KEY (employee_id) REFERENCES Employee(id) ON DELETE CASCADE,
    FOREIGN KEY (office_id) REFERENCES Office(id) ON DELETE SET NULL
);

