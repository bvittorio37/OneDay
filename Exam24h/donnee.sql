
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


INSERT INTO Categorie VALUES(NULL,'Boisson');
INSERT INTO Categorie VALUES(NULL,'Snack');
INSERT INTO Categorie VALUES(NULL,'Cuisine');


INSERT INTO Produit VALUES (NULL,'1','Big Cola 1,5L',4500);
INSERT INTO Produit VALUES (NULL,'1','Cristalline 1L',1500);
INSERT INTO Produit VALUES (NULL,'1','Volnic 1L',1500);
INSERT INTO Produit VALUES (NULL,'1','Djino',1500);
INSERT INTO Produit VALUES (NULL,'1','Tampico',2000);
INSERT INTO Produit VALUES (NULL,'2','Salto Chips',500);
INSERT INTO Produit VALUES (NULL,'2','Doritos',2000);
INSERT INTO Produit VALUES (NULL,'2','Pringels',5000);
INSERT INTO Produit VALUES (NULL,'2','Cacapigeon',2000);
INSERT INTO Produit VALUES (NULL,'2','Chevro',2000);
INSERT INTO Produit VALUES (NULL,'3','Oeuf',600);
INSERT INTO Produit VALUES (NULL,'3','Carrote',600);
INSERT INTO Produit VALUES (NULL,'3','Poivre',500);
INSERT INTO Produit VALUES (NULL,'3','Carry',500);
INSERT INTO Produit VALUES (NULL,'3','Sel',200);


INSERT INTO Caisse VALUES(NULL,'Numero1');
INSERT INTO Caisse VALUES(NULL,'Numero2');




create view listeAchat as select Achat.idAchat,Caisse.Numero,Produit.code,Produit.designation,Achat.quantiter,Produit.prixUnitaire,Achat.Montant,Caisse.idCaisse from Achat join Caisse on Achat.idCaisse=Caisse.idCaisse join Produit on Produit.idProduits=Achat.idProduits;
