-- Table Creation

-- Customer Table
CREATE TABLE customer(User_ID int NOT NULL PRIMARY KEY,
first_Name VARCHAR(30),
last_Name VARCHAR(30),
EmailID VARCHAR(40),
DOB DATE,
Gender VARCHAR(10),
Address VARCHAR(40),
City VARCHAR(20),
State VARCHAR(20),
pincode int (7)
);
-- Employee Table
CREATE TABLE employee(Emp_ID int NOT NULL PRIMARY KEY, 
first_Name VARCHAR(30),
last_Name VARCHAR(30),
EmailID VARCHAR(40),
designation VARCHAR(30),
Salary int,
dateofjoining DATE,
DOB DATE,
Gender VARCHAR(10),
Address VARCHAR(20),
City VARCHAR(20),
State VARCHAR(20),
pincode int(7)
);

-- Book Table
CREATE TABLE books (
    S_no INT AUTO_INCREMENT PRIMARY KEY,
    ISBN BIGINT NOT NULL UNIQUE,  -- BIGINT store large integer values
    Name VARCHAR(30),
    Author VARCHAR(30),
    Edition INT,
    Type VARCHAR(30),
    Genre VARCHAR(10),
    Binding_Type VARCHAR(30),
    Buying_Price INT
);
-- Seller Table
CREATE TABLE seller (
    Seller_ID INT PRIMARY KEY AUTO_INCREMENT,
    Seller_Name VARCHAR(30),
    Phone BIGINT,  -- BIGINT store large integer values
    Address VARCHAR(20),
    City VARCHAR(20),
    State VARCHAR(20),
    pincode INT
);
-- Publisher Table
CREATE TABLE publisher(Publisher_ID int  PRIMARY KEY AUTO_INCREMENT,
Publisher_Name VARCHAR(30),
Address VARCHAR(20),
City VARCHAR(20),
State VARCHAR(20),
pincode int
);

-- Users Table
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    age INT(10) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    gender VARCHAR(20) NOT NULL,
    password VARCHAR(150) NOT NULL
);

