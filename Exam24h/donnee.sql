

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
PRIMARY KEY(idProduits)
); 





CREATE TABLE Admins (
idAdmins int NOT NULL AUTO_INCREMENT,
user VARCHAR(20),
mdp VARCHAR(20),
PRIMARY KEY(idAdmins)
);

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
create view listeVente as select quantite*PRODUIT.prixUnitaire as montant,vente.* from vente join produit on vente.idproduit=produit.idproduits;
/*le plus vendue*/
select * from Vente order by quantite desc;
/*le plus vendue caisse*/
 select sum(montant)as valeurApporte,IDCAISSE from listevente group by idcaisse ASC;
/*le plus recent produit acheter*/
select * from listevente  order by datedevente asc;