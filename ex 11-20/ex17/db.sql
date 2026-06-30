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

INSERT INTO books (title, author, year, genre, price, in_stock) VALUES
('Harry Potter à l\'école des sorciers', 'J.K. Rowling', 1997, 'Fantasy', 19.99, 1),
('Le Seigneur des Anneaux', 'J.R.R. Tolkien', 1954, 'Fantasy', 25.50, 1),
('1984', 'George Orwell', 1949, 'Dystopie', 14.20, 0),
('Dune', 'Frank Herbert', 1965, 'Science-Fiction', 21.00, 1),
('L\'Étranger', 'Albert Camus', 1942, 'Roman', 8.50, 1),
('Fondation', 'Isaac Asimov', 1951, 'Science-Fiction', 18.00, 1);