
SELECT Categorie.IDCategoria, AVG(Prodotti.prezzoUnitario) AS "Media Prezzi"
FROM Categorie, Prodotti
WHERE Categorie.IDCategorie = Prodotti.IDCategoria
GROUP BY Categoie.IDCategoria
