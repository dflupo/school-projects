
select Categorie.IDCategoria, avg(Prodotti.PrezzoUnitario) as “Media prezzi”
from Categorie, Prodotti
where Categorie.IDCategoria = Prodotti.IDCategoria
group by Categorie.IDCategoria

select Categorie.NomeCategoria, min(Prodotti.PrezzoUnitario) as “Prezzo minore”,
max(Prodotti.PrezzoUnitario) as “Prezzo maggiore.”
from Categorie, Prodotti
where Categorie.IDCategoria = Prodotti.IDCategoria
group by Categorie.NomeCategoria

select Fornitori.IDFornitore, count(Prodotti.IDProdotto) as “Numero prodotti forniti”
from Fornitori, Prodotti
where Fornitori.IDFornitore = Prodotti.IDFornitore
group by Fornitori.IDFornitore

select Fornitori.NomeSocieta, count(Prodotti.IDProdotto) as “Numero prodotti forniti”
from Fornitori, Prodotti
where Fornitori.IDFornitore = Prodotti.IDFornitore
group by Fornitori.NomeSocieta

select Corrieri.IDCorriere, avg(Ordini.Trasporto) as “Media spese di trasporto”
from Corrieri, Ordini
where Corrieri.IDCorriere = Ordini.IDOrdine
group by Corrieri.IDCorriere

select Corrieri.NomeSocieta, avg(Ordini.Trasporto) as “Media spese di trasporto”
from Corrieri, Ordini
where Corrieri.IDCorriere = Ordini.IDOrdine
group by Corrieri.NomeSocieta
