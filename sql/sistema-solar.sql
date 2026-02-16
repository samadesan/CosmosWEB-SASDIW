CREATE DATABASE IF NOT EXISTS sistema_solar;
USE sistema_solar;

CREATE TABLE IF NOT EXISTS usuarios (
                                        id INT AUTO_INCREMENT PRIMARY KEY,
                                        fullname VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );