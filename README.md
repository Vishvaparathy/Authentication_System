### PHP Login & Registration System
This is a simple Login and Registration system developed using Core PHP and MySQL.
The project demonstrates how user authentication works using password hashing and PHP sessions.

### Project Features
1. User registration
2. Secure password storage using password_hash()
3. User login with password_verify()
4. Session-based authentication
5. Protected welcome page
6. Logout functionality
7. Reusable header and footer
8. Simple and clean UI

### Technologies Used
1. PHP
2. MySQL
3. HTML
4. CSS
5. XAMPP
6. Visual Studio Code

### Folder Structure
Login_System/
|-- config.php
|-- signup.php
|-- login.php
|-- welcome.php
|-- logout.php
|-- header.php
|-- footer.php
|-- README.md

### How to Run the Project
Step 1: Install XAMPP
        Start Apache and MySQL
Step 2: Create Database
        Open phpMyAdmin and execute:

CREATE DATABASE login_system;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

Step 3: Database Configuration
Update config.php:
<?php
$conn = mysqli_connect("localhost", "root", "", "login_system");
if (!$conn) {
    die("Database connection failed");
}
?>

Step 4: Run in Browser
Move the project folder to:
C:\xampp\htdocs\Login_System

Open browser:
- Register: http://localhost/Login_System/signup.php

- Login: http://localhost/Login_System/login.php

### Application Flow
Register → Login → Welcome Page → Logout
- Passwords are stored securely
- Sessions protect restricted pages
- Logout destroys the session

## Screenshots

### User Registration Page
![Register Page]<img width="1920" height="1080" alt="Screenshot (1063)" src="https://github.com/user-attachments/assets/866a0666-9665-45bc-9fb9-766ac32a8bac" />

### Login Page
![Login Page]<img width="1920" height="1080" alt="Screenshot (1069)" src="https://github.com/user-attachments/assets/509dd491-f78a-4d2c-ad7c-43edbf32e028" />

### Welcome Dashboard
![Welcome Page]<img width="1920" height="1080" alt="Screenshot (1068)" src="https://github.com/user-attachments/assets/9d477cd6-7295-40b9-b9e9-c3ad3a2823d3" />

### Database and users Table
![Database & users Table]<img width="1920" height="1080" alt="Screenshot (1075)" src="https://github.com/user-attachments/assets/44629195-b59b-4845-af15-ed481bc29818" />

### What I Learned
How PHP sessions work
How to hash and verify passwords
How to connect PHP with MySQL
How authentication systems work

How to connect PHP with MySQL

How authentication systems work
