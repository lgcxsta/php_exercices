CREATE DATABASE biblioteque;
USE biblioteque;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    author VARCHAR(120) NOT NULL,
    year INT NOT NULL,
    genre VARCHAR(80) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    in_stock TINYINT(1) NOT NULL DEFAULT 1,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX index_author ON books (author);
CREATE INDEX index_genre ON books (genre);