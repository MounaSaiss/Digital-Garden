
USE garden;
CREATE TABLE  users (
    id int AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    dateInscription DATE NOT NULL
);
CREATE TABLE theme(
    id int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(25) NOT NULL,
    badgeCouleur VARCHAR(30) NOT NULL,
    tags VARCHAR(30),
    id_user INT NOT NULL,
    FOREIGN KEY (id_user)REFERENCES users(id)
); 
CREATE TABLE note (
    id int AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(50) NOT NULL,
    importance INT NOT NULL CHECK(importance BETWEEN 1 AND 5),
    contenu VARCHAR(255) NOT NULL,
    dateCreation DATE NOT NULL,
    id_theme INT NOT NULL ,
    FOREIGN KEY(id_theme) REFERENCES theme(id)
);

ALTER TABLE users
ADD email VARCHAR(50) AFTER username;
ALTER TABLE users
ADD confirm_password VARCHAR(255) AFTER password ;
ALTER TABLE users
ADD lastLogin TIME AFTER dateInscription;



