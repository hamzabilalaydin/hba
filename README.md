# hba
Learning programming.

#SQL code for 28 August
```SQL
SELECT left(il, 1) AS Harf, count(DISTINCT il) AS Sayi FROM referandum GROUP BY left(il, 1);
```
