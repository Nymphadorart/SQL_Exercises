/*Afficher toutes les données*/
SELECT * FROM school;
SELECT * FROM students;
/*Afficher seulement les prénoms*/
SELECT prenom FROM students;
/*Affiche les prénoms, les dates de naissance et l’école de chacun.*/
SELECT prenom, datenaissance, school FROM students;
/*Afficher seulement les élèves de genre féminin*/
SELECT * FROM students WHERE genre ="F";
/*Afficher les prénoms dans l'ordre inverse de l'alphabet */
SELECT prenom FROM students ORDER BY prenom DESC;
/*La même mais limitant les résultats à deux*/
SELECT prenom FROM students ORDER BY prenom DESC LIMIT 2;
/*Ajoute Ginette Dalor, née le 01/01/1930 et affecte-la à Central, toujours en SQL.*/
INSERT INTO students (nom, prenom, datenaissance, genre, school)
VALUES ("Dalor", "Ginette", "1930-01-01", "F", 1);
/*Modifie Ginette (toujours en SQL) et change son sexe et son prénom en “Omer”.*/
UPDATE students SET prenom ="Omer", genre = "M" WHERE prenom = "Ginette";
/*Supprimer la personne dont l’ID est 3.*/
DELETE FROM students WHERE isStudents = 3;
/*Modifier le contenu de la colonne School de sorte que "1" soit remplacé par "Central" et "2" soit remplacé par "Anderlecht". */
ALTER TABLE students MODIFY school CHAR(50); 
UPDATE students SET school = "Central" WHERE school = "1";
UPDATE students SET school = "Anderlecht" WHERE school = "2";