-- Create DB and user
CREATE DATABASE IF NOT EXISTS cyberapp CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
CREATE USER IF NOT EXISTS 'cyberuser'@'localhost' IDENTIFIED BY 'cyberpass';
GRANT ALL PRIVILEGES ON cyberapp.* TO 'cyberuser'@'localhost';
FLUSH PRIVILEGES;

USE cyberapp;
CREATE TABLE IF NOT EXISTS messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- optional sample
INSERT INTO messages (name, message) VALUES ('Alice','Hello world'), ('Bob','Test message');