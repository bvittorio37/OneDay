
DROP DATABASE caisse;
create database caisse;
use caisse;

CREATE TABLE Produit (
idProduits int NOT NULL AUTO_INCREMENT,
idCategorie int,
nom_produit VARCHAR(20),
prixUnitaire int,
PRIMARY KEY(idProduits)
)ENGINE=InnoDb; 

CREATE TABLE Caisse (
idCaisse int NOT NULL AUTO_INCREMENT,
Numero int,
PRIMARY KEY(idCaisse)
)ENGINE=InnoDb; 


CREATE TABLE Categorie (
idCategorie int NOT NULL AUTO_INCREMENT,
Categorie int,
PRIMARY KEY(idCategorie)
)ENGINE=InnoDb; 

CREATE TABLE Achat (
idAchat int NOT NULL AUTO_INCREMENT,
idCaisse int,
idProduits int,
quantiter int,
Montant float,
PRIMARY KEY(idAchat)
)ENGINE=InnoDb; 

CREATE TABLE Admins (
idAdmins int NOT NULL AUTO_INCREMENT,
user VARCHAR(20),
mdp VARCHAR(20),
PRIMARY KEY(idAmin)
)ENGINE=InnoDb; 

CREATE TABLE Vente(
idVente int NOT NULL AUTO_INCREMENT,
idProduit int,
idCaisse int,
quantite int,
datedeVente date,
PRIMARY KEY(idVente)
);


INSERT INTO Produit VALUES (NULL,'001','Briquet',30,350);
INSERT INTO Produit VALUES (NULL,'002','Savon',20,700);
INSERT INTO Produit VALUES (NULL,'003','Doritos',40,2000);
INSERT INTO Produit VALUES (NULL,'004','Cahier 100pg',15,1300);
INSERT INTO Produit VALUES (NULL,'005','Salto chips',17,500);
INSERT INTO Produit VALUES (NULL,'001','Big cola',30,350);
INSERT INTO Produit VALUES (NULL,'002','Mars',20,700);
INSERT INTO Produit VALUES (NULL,'003','Pringels',40,2000);
INSERT INTO Produit VALUES (NULL,'004','Cristalline 1L',15,1300);
INSERT INTO Produit VALUES (NULL,'005','Nickel',17,500);
INSERT INTO Produit VALUES (NULL,'001','Mais doux',30,350);
INSERT INTO Produit VALUES (NULL,'002','Oeuf',20,700);
INSERT INTO Produit VALUES (NULL,'003','Carotte',40,2000);
INSERT INTO Produit VALUES (NULL,'004','Farilac',15,1300);
INSERT INTO Produit VALUES (NULL,'005','Yaourt',17,500);

INSERT INTO Caisse VALUES(NULL,'Numero1');
INSERT INTO Caisse VALUES(NULL,'Numero2');





create view listeAchat as select Achat.idAchat,Caisse.Numero,Produit.code,Produit.designation,Achat.quantiter,Produit.prixUnitaire,Achat.Montant,Caisse.idCaisse from Achat join Caisse on Achat.idCaisse=Caisse.idCaisse join Produit on Produit.idProduits=Achat.idProduits;
