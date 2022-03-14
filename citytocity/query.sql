
SELECT Viaggi.*
FROM Viaggi, Collegamenti
WHERE Collegamenti.id_collegamento = Viaggi.id_collegamento
Collegamenti.citta = "Roma" AND
Viaggio.data BETWEEN "2020-07-01" AND "2020-07-31"


SELECT Viaggi.id_viaggio, avg(Collegamenti.durata_viaggio) as "media durata viaggi"
FROM Collegamenti, Viaggi
WHERE Collegamenti.andata IS NOT NULL AND
Viaggi.data BETWEEN "2022-08-01" AND "2022-08-31"
GROUP BY Viaggi.id_viaggio
