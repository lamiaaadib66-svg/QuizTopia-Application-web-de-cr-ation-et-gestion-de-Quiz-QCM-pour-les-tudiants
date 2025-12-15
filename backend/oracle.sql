insert into produit values(1,'Roue de secours');
insert into produit values(2,'Poupée Batman');
insert into produit values(3,'Cotons tiges');
insert into produit values(4,'Cornichons');
select * from produit;

insert into fournisseur values(1,'F1');
insert into fournisseur values(2,'F2');
insert into fournisseur values(3,'F3');
insert into fournisseur values(4,'F4');
select * from fournisseur;

insert into proposer values(1,1,200);
insert into proposer values(1,2,15);
insert into proposer values(2,2,1);
insert into proposer values(3,3,2);
select * from proposer;

insert into livraison(numfou,numli) values(1,1);
insert into livraison(numfou,numli) values(1,2);
insert into livraison(numfou,numli) values(3,1);
select * from livraison;

insert into detaillivraison values(3,1,3,10);
insert into detaillivraison values(1,1,1,25);
insert into detaillivraison values(1,1,2,20);
insert into detaillivraison values(1,2,1,15);
insert into detaillivraison values(1,2,2,17);
select * from detaillivraison;