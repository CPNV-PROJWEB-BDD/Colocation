-- Ahmed Mujanovic
-- 3.5.2023
-- Requete utilse pour insérer les donnés dans les différentes tables
-- ProjetWeb BDD


-- Insérer les donnés dans la tables members
INSERT INTO members (firstname, lastname, email, passwordHash) VALUES ('Adem', 'Mujanovic', 'Adem.Mujanovic@cpnv.ch', 'Pa$$w0rd');
INSERT INTO members (firstname, lastname, email, PASSWORDHash) VALUES ('Ahmed', 'Mujanovic', 'Ahmed.Mujanovic@cpnv.ch', 'Pa$$w0rd');

-- Insérer les donnés dans la tables  goods
INSERT INTO goods (title, picture, kindOfGood, town, address, DESCRIPTION, numberOfPieces, active) VALUES ('Colocation-Neuch', 'documents/User/fleur.png', 'Appartements', 'Yverdon-les bains', 'Rue jeans andré venel 150', 'trés beau appartements, une magnifque vue sur le lac', '3', '1');
INSERT INTO goods (title, picture, kindOfGood, town, address, DESCRIPTION, numberOfPieces, active) VALUES ('Colocation-Yverdon', 'documents/esaaie/fleur.png', 'Maison', 'Fribourg', 'Rue jeans andré venel 150', 'trés beau appartements, une magnifque vue sur le lac', '3', '1');

-- Insérer les donnés dans la table members_has_good
INSERT INTO members_has_goods (member_id, good_id, startDate, endDate) VALUES (1, 2,'2018-04-13','2018-06-13');
INSERT INTO members_has_goods (member_id, good_id, startDate, endDate) VALUES (2, 1,'2018-04-13','2018-06-13');
