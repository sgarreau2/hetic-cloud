CREATE DATABASE messages_db;
USE messages_db;

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATETIME NOT NULL,
    content TEXT NOT NULL
);
