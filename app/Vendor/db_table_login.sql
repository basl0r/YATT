-- Simple Authentication and Authorization Application
-- http://book.cakephp.org/2.0/en/tutorials-and-examples/blog-auth-example/auth.html

CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255),
    role VARCHAR(20),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);
