

CREATE TABLE Categorie (
idCategorie int NOT NULL AUTO_INCREMENT,
Categorie VARCHAR(100),
PRIMARY KEY(idCategorie)
);

CREATE TABLE Caisse (
idCaisse int NOT NULL AUTO_INCREMENT,
Caisse Varchar(20),
PRIMARY KEY(idCaisse)
);


CREATE TABLE Produit (
idProduits int NOT NULL AUTO_INCREMENT,
idCategorie int,
nom_produit VARCHAR(20),
prixUnitaire float,
images Varchar(20),
PRIMARY KEY(idProduits)
); 





CREATE TABLE Admins (
idAdmins int NOT NULL AUTO_INCREMENT,
user VARCHAR(20),
mdp VARCHAR(100),
PRIMARY KEY(idAdmins)
);

CREATE TABLE Vente(
idVente int NOT NULL AUTO_INCREMENT,
idProduits int,
idCaisse int,
quantite int,
datedeVente date,
PRIMARY KEY(idVente)
);


INSERT INTO Categorie VALUES(NULL,'Boisson');
INSERT INTO Categorie VALUES(NULL,'Snack');
INSERT INTO Categorie VALUES(NULL,'Cuisine');


INSERT INTO Produit VALUES (NULL,'1','Big Cola 1,5L',4500,'1.jpg');
INSERT INTO Produit VALUES (NULL,'1','Cristalline 1L',1500,'2.jpg');
INSERT INTO Produit VALUES (NULL,'1','Volnic 1L',1500,'3.jpg');
INSERT INTO Produit VALUES (NULL,'1','Djino',1500,'4.jpg');
INSERT INTO Produit VALUES (NULL,'1','Tampico',2000,'5.jpg');
INSERT INTO Produit VALUES (NULL,'2','Salto Chips',500,'6.jpg');
INSERT INTO Produit VALUES (NULL,'2','Doritos',2000,'7.jpg');
INSERT INTO Produit VALUES (NULL,'2','Pringels',5000,'8.jpg');
INSERT INTO Produit VALUES (NULL,'2','Cacapigeon',2000,'9.jpg');
INSERT INTO Produit VALUES (NULL,'2','Chevro',2000,'10.jpg');
INSERT INTO Produit VALUES (NULL,'3','Oeuf',600,'11.jpg');
INSERT INTO Produit VALUES (NULL,'3','Carrote',600,'12.jpg');
INSERT INTO Produit VALUES (NULL,'3','Poivre',500,'13.jpg');
INSERT INTO Produit VALUES (NULL,'3','Carry',500,'14.jpg');
INSERT INTO Produit VALUES (NULL,'3','Sel',200,'15.jpg');


INSERT INTO Caisse VALUES(NULL,'Numero1');
INSERT INTO Caisse VALUES(NULL,'Numero2');
INSERT INTO Caisse VALUES(NULL,'Numero3');



INSERT INTO Vente VALUES(NULL,'1','1','2',Now());
INSERT INTO Vente VALUES(NULL,'2','3','10',Now());
INSERT INTO Vente VALUES(NULL,'7','2','2',Now());
INSERT INTO Vente VALUES(NULL,'8','1','3',Now());
INSERT INTO Vente VALUES(NULL,'4','2','2',Now());
INSERT INTO Vente VALUES(NULL,'3','1','3',Now());
INSERT INTO Vente VALUES(NULL,'6','2','2',Now());
INSERT INTO Vente VALUES(NULL,'9','1','3',Now());
INSERT INTO Vente VALUES(NULL,'10','2','2',Now());
INSERT INTO Vente VALUES(NULL,'11','1','3',Now());

INSERT INTO Admins VALUES(NULL,'oneday',sha1("motdepasse"));

/*montant*/
create view listeVente as select quantite*PRODUIT.prixUnitaire as montant,vente.* from vente join produit on vente.idproduits=produit.idproduits;
/*le plus vendue*/
select produit.nom_produit,categorie.categorie from Vente join produit on produit.idProduits=Vente.idProduits join categorie on categorie.idcategorie=produit.idcategorie order by quantite desc;
/*le plus vendue caisse*/
 select sum(montant)as valeurApporte,IDCAISSE from listevente group by idcaisse ASC;
/*le plus recent produit acheter*/
select * from listevente  order by datedevente asc;