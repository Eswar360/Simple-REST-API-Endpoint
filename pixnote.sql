CREATE DATABASE IF NOT EXISTS mydb;
USE mydb;

CREATE TABLE pixnote (
    pid INT AUTO_INCREMENT PRIMARY KEY,
    pname VARCHAR(60),
    pmail VARCHAR(120)
);

INSERT INTO pixnote (pname, pmail) VALUES
('Lior', 'lior@pix.com'),
('Navi', 'navi@pix.com'),
('Saro', 'saro@pix.com');
