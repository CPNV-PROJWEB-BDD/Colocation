-- Ahmed Mujanovic
-- 3.5.2023
-- Requete utilse pour insérer les donnés dans les différentes tables
-- ProjetWeb BDD


-- Insérer les donnés dans la tables members
INSERT INTO members (firstname, lastname, email, passwordHash) VALUES ('Adem', 'Mujanovic', 'Adem.Mujanovic@cpnv.ch', 'Pa$$w0rd');
INSERT INTO members (firstname, lastname, email, passwordHash) VALUES ('Ahmed', 'Mujanovic', 'Ahmed.Mujanovic@cpnv.ch', 'Pa$$w0rd');
members

-- Insérer les donnés dans la tables  goods
INSERT INTO goods (title, picture, kindOfGood, town, address, DESCRIPTION, numberOfPieces, active) VALUES ('Appartement orginal', '../view/content/images/s-1.jpg', 'Appartement', 'Fribourg', 'Rue de morat', "c'est un très beau appartement avec une magnifique vue", 3.5, 1);
INSERT INTO goods (title, picture, kindOfGood, town, address, DESCRIPTION, numberOfPieces, active) VALUES ('Appartement moderne', '../view/content/images/s-2.jpg', 'Appartement', 'Ste-croix', 'Rue des Rasses', "c'est un très beau appartement avec une magnifique vue", 4, 1);
INSERT INTO goods (title, picture, kindOfGood, town, address, DESCRIPTION, numberOfPieces, active) VALUES ('Maison ancienne', '../view/content/images/s-3.jpg', 'Maison', 'Yverdon', "Rue d'orbe", "c'est une très belle maison avec une magnifique vue", 3.5, 1);
INSERT INTO goods (title, picture, kindOfGood, town, address, DESCRIPTION, numberOfPieces, active) VALUES ('Appartement luxe', '../view/content/images/s-4.jpg', 'Appartement', 'Grandson', 'Chemin de Bellevue', "c'est un très beau appartement avec une magnifique vue", 2, 1);
INSERT INTO goods (title, picture, kindOfGood, town, address, DESCRIPTION, numberOfPieces, active) VALUES ('Maison tranquille', '../view/content/images/s-5.jpg', 'Maison', 'Yverdon', 'Avenue Général Guisans', "c'est une très belle maison avec une magnifique vue", 3, 1);
INSERT INTO goods (title, picture, kindOfGood, town, address, DESCRIPTION, numberOfPieces, active) VALUES ('Appartmenent avec balcon', '../view/content/images/s-6.jpg', 'Appartement', 'Yverdon', 'Chemin des roses', "c'est un très beau appartement avec une magnifique vue", 2.5, 1);

-- Insérer les donnés dans la table members_has_good
INSERT INTO members_has_goods (member_id, good_id, startDate, endDate) VALUES (1, 2,'2018-04-13','2018-06-13');
INSERT INTO members_has_goods (member_id, good_id, startDate, endDate) VALUES (2, 1,'2018-04-13','2018-06-13');
INSERT INTO members_has_goods (member_id, good_id, startDate, endDate) VALUES (1, 4,'2018-04-13','2018-06-13');
INSERT INTO members_has_goods (member_id, good_id, startDate, endDate) VALUES (2, 3,'2018-04-13','2018-06-13');
INSERT INTO members_has_goods (member_id, good_id, startDate, endDate) VALUES (1, 6,'2018-04-13','2018-06-13');
INSERT INTO members_has_goods (member_id, good_id, startDate, endDate) VALUES (2, 5,'2018-04-13','2018-06-13');