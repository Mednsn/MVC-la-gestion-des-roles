CREATE DATABASE gestion_articls;
USE gestion_articls;
CREATE TABLE users (
    id int PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    email VARCHAR(80) UNIQUE NOT NULL,
    role VARCHAR(80)

)ENGINE=INNODB;

CREATE TABLE articles (
    id int PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(80),
    description TEXT,
    user_id int, 
    FORINGE KEY (user_id) REFERENCE users(id) DELETE ON CASCADE

)ENGINE=INNODB;