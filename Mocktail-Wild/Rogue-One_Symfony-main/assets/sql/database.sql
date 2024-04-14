--
-- Destruction, création et utilisation de la BDD
--
DROP DATABASE IF EXISTS `MOCKTAILS_CELESTE`;

CREATE DATABASE IF NOT EXISTS `MOCKTAILS_CELESTE`;

USE `MOCKTAILS_CELESTE`;

--
-- Création des tables MEMBERS, CATEGORY, PRODUCTS, CONTACT, OPINION, INGREDIENTS, BANNER
--
CREATE TABLE IF NOT EXISTS `MEMBERS` (
  ID INT AUTO_INCREMENT NOT NULL,
  `FIRSTNAME` VARCHAR(50) NOT NULL,
  `LASTNAME` VARCHAR(50) NOT NULL,
  `ROLE` VARCHAR(25) NOT NULL,
  `IMG` VARCHAR(100) NOT NULL,
  `LINK` VARCHAR(50) NOT NULL,
  `DESCRIPTION` TEXT(255) NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS `CATEGORY` (
  `ID` INT AUTO_INCREMENT NOT NULL,
  `NAME` VARCHAR(25) NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS `PRODUCTS` (
  `ID` INT AUTO_INCREMENT NOT NULL,
  `NAME` VARCHAR(25) NOT NULL,
  `PRICE` FLOAT(10) NOT NULL,
  `DETAILS` TEXT NOT NULL,
  `IMG` VARCHAR(255) NOT NULL,
  PRIMARY KEY (ID)
);

ALTER TABLE `PRODUCTS` ADD COLUMN `CATEGORY_ID` INT, ADD FOREIGN KEY (`CATEGORY_ID`) REFERENCES `CATEGORY`(`ID`);

CREATE TABLE IF NOT EXISTS `CONTACT` (
  ID INT AUTO_INCREMENT NOT NULL,
  `NAME` VARCHAR(50) NOT NULL,
  `EMAIL` VARCHAR(150) NOT NULL,
  `SUBJECT` VARCHAR(50) NOT NULL,
  `MESSAGE` TEXT NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE INGREDIENTS (
  `ID` INT AUTO_INCREMENT NOT NULL,
  NAME VARCHAR(100) NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE PRODUCT_INGREDIENTS (
  PRODUCT_ID INT,
  INGREDIENT_ID INT,
  PRIMARY KEY (PRODUCT_ID, INGREDIENT_ID),
  FOREIGN KEY (PRODUCT_ID) REFERENCES PRODUCTS(ID),
  FOREIGN KEY (INGREDIENT_ID) REFERENCES INGREDIENTS(ID)
);

CREATE TABLE `SUBJECT` (
  ID INT AUTO_INCREMENT NOT NULL,
  NAME VARCHAR(50) NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE SOCIAL_NETWORKS_LINKS (
  ID INT AUTO_INCREMENT NOT NULL,
  NAME VARCHAR (25),
  CLASS VARCHAR (25),
  LINK VARCHAR (100),
  PRIMARY KEY (ID)
);
--
-- Insersion des données dans les tables CATEGORY, PRODUCTS, INGREDIENTS,MEMBERS
--
INSERT INTO CATEGORY (`ID`,`NAME`) VALUES
(1,'ENERGISANTS NATURELS'),
(2,'FRUITS LOCAUX EPICES'),
(3,'MARIAGES SAVEURS UNIQUES'),
(4,'FRAICHEUR SUBLILITE'),
(5,'CHALEUR EPICE'),
(6,"FRUITS D'EXCELLENCE");

INSERT INTO `PRODUCTS` (`NAME`, `PRICE`, `DETAILS`, `IMG`, `CATEGORY_ID`) VALUES
("WARA'TAIL", 3.50, "Boisson énergisante à l'Awara de BIO STRATÈGE (poudre concentrée), au Maracudja (Fruit de la Passion) et à la Mandarine. Sa belle couleur naturelle est grâce aux fruits qui la composent. Son goût est très original et bien fruité.", 'waraTail.png', 1),
("WASSAÏ'TAIL", 3.50, "Boisson énergisante au Wassaï de BIO STRATÈGE (poudre concentrée) et à la Pitaya (Fruit du dragon) et au piment fort. Sa belle couleur naturelle est due aux fruits que contient ce Mocktail. Son goût est très original, fait penser au raisin et le piment chien sublime cette boisson.", 'wassaiTail.png', 1),
("PANGA ROUJ'", 3.50, "Panga (Attention en créole guyanais) à son côté subtil, mais piquant avec le piment Chien. Sa belle couleur grâce au Pitaya. Son délicieux goût de Cerises Péyi.", 'pangaRouj.png', 2),
("ICE COFFEE GINGER", 3.50, "Café glacé guyanais parfumé au Gingembre et raffiné en bouche. Sa belle couleur grâce au Café. Son goût est unique et original.", 'iceCoffeeGinger.png', 3),
("MACOCI", 3.50, "Punch Coco sans Alcool bien crémeux, à base de Maracudja (Fruit de la Passion). Sa belle couleur grâce aux deux principaux fruits que contient ce mocktail. Son goût est très original et bien doux, rappelant une délicieuse pâtisserie fine.", 'macoci.png', 2),
("MORINAS", 3.50, "Boisson rafraîchissante à l'Ananas débordant de 'peps' avec sa Menthe bien fraîche et puissante. Sa belle couleur est due à l'Ananas et à la Menthe locale. Son goût est très fruité et mentholé, mais aussi relevé avec le bois d'Inde qui vient sublimer ce Mocktail.", 'morinas.png', 4),
("MÉLOJAH GINGER", 3.50, "Boisson bien rafraîchissante bien parfumée au gingembre, sans son côté piquant. Sa belle couleur est surtout due au Melon d’eau. Son goût est très fruité avec les discrets gingembre et maracudja, puis le melon d’eau qui nous affirme sa fraîcheur.", 'melojaGinger.png', 1),
("HOT PAPA CHÉWI", 3.50, "Boisson bien chaleureuse avec son côté piquant avec le piment chien (fort). Sa belle couleur est due à la Papaye Solo et à la Cerise Péyi (Acerola). Son goût est très fruité et doux avec la Papaye qui apporte de la rondeur et adoucit le piquant du piment.", 'hotPapaChewi.png', 5),
("SOLOJAH", 3.50, "Boisson débordant de 'peps' : à la fois frais et acidulé avec son maracudja. Sa belle couleur est due à la Papaye Solo et au Maracudja (Fruit de la Passion). Son goût est très fruité et doux avec la Papaye qui apporte de la rondeur : il nous fait drôlement penser à du planteur.", 'solojah.png', 2),
("PAPAYER PÉYI", 3.50, "Boisson hyper rafraîchissante à la Papaye Solo, à la Citronnelle fraîche et au piment Scorpion. Sa belle couleur est grâce à la Papaye. Son délicieux goût de Thé Péyi fruité, raffiné et pimenté.", 'papayerPeyi.png', 6),
("THÉ PÉYI DORÉ", 3.50, "Boisson hyper rafraîchissante, parfumée au Maracudja (Fruit de la Passion) et à la Citronnelle fraîche. Sa belle couleur grâce aux couleurs naturelles du Maracudja et de la Citronnelle. Son goût est très original, bien parfumé et subtilement relevé par le gingembre.", 'thePeyiDore.png', 3),
("HOT BLOOD", 3.50, "Boisson bien rafraîchissante bien parfumée avec sa Cerise Péyi et sa Groseille Péyi. Sa belle couleur est due à ces deux fruits. Son goût est très fruité et agréablement acidulé, puis le piment fort vient sublimer notre Mocktail.", 'hotBlood.png', 5),
("YANA START", 3.50, "Boisson débordante de fraîcheur avec sa Mangue verte et sa Cerise Péyi, relevées par du Piment fort. Sa belle couleur est due au mariage de ces deux fruits. Son goût est rempli de caractère et reste tout de même frais.", 'yanaStart.png', 6);

INSERT INTO INGREDIENTS (ID, NAME) VALUES
(1, 'Awara (poudre concentrée)'),
(2, 'Maracudja (Fruit de la passion)'),
(3, 'Mandarine'),
(4, 'Wassaï'),
(5, 'Pitaya (Fruit du dragon)'),
(6, 'Piment fort'),
(7, 'Panga'),
(8, 'Cerises Péyi'),
(9, 'Café'),
(10, 'Gingembre'),
(11, 'Melon d''eau'),
(12, 'Ananas'),
(13, 'Menthe'),
(14, 'Bois d''Inde'),
(15, 'Papaye Solo'),
(16, 'Cerise Péyi (Acerola)'),
(17, 'Piment chien (fort)'),
(18, 'Citronnelle fraîche'),
(19, 'Piment Scorpion'),
(20, 'Groseille Péyi'),
(21, 'Mangue verte'),
(22, 'noix de coco');


INSERT INTO PRODUCT_INGREDIENTS (PRODUCT_ID,INGREDIENT_ID) VALUES
(1, 1),   -- WARA'TAIL : Awara (poudre concentrée)
(1, 2),   -- WARA'TAIL : Maracudja (Fruit de la passion)
(1, 3),   -- WARA'TAIL : Mandarine
(2, 4),   -- WASSAÏ'TAIL : Wassaï (poudre concentrée)
(2, 5),   -- WASSAÏ'TAIL : Pitaya (Fruit du dragon)
(2, 6),   -- WASSAÏ'TAIL : Piment fort
(3, 7),   -- PANGA ROUJ' : Panga
(3, 5),   -- PANGA ROUJ' : Pitaya (Fruit du dragon)
(3, 8),   -- PANGA ROUJ' : Cerises Péyi
(4, 9),   -- ICE COFFEE GINGER : Café
(4, 10),  -- ICE COFFEE GINGER : Gingembre
(5, 22),  -- MACOCI : noix de coco
(5, 2),   -- MACOCI : Maracudja (Fruit de la passion)
(6, 12),  -- MORINAS : Ananas
(6, 13),  -- MORINAS : Menthe
(7, 10),  -- MÉLOJAH GINGER : Gingembre
(7, 11),  -- MÉLOJAH GINGER : Melon d'eau
(7, 2),   -- MÉLOJAH GINGER : Maracudja (Fruit de la passion)
(8, 17),  -- HOT PAPA CHÉWI : Piment chien (fort)
(8, 15),  -- HOT PAPA CHÉWI : Papaye Solo
(8, 8),   -- HOT PAPA CHÉWI : Cerise Péyi
(9, 2),   -- SOLOJAH : Maracudja (Fruit de la passion)
(10, 5),   -- PAPAYER PÉYI : Pitaya (Fruit du dragon)
(10, 18),  -- PAPAYER PÉYI : Citronnelle fraîche
(10, 19),  -- PAPAYER PÉYI : Piment Scorpion
(11, 2),   -- THÉ PÉYI DORÉ : Maracudja (Fruit de la passion)
(11, 18),  -- THÉ PÉYI DORÉ : Citronnelle fraîche
(11, 10),  -- THÉ PÉYI DORÉ : Gingembre
(12, 8),   -- HOT BLOOD : Cerises Péyi
(12, 20),  -- HOT BLOOD : Groseille Péyi
(12, 6),   -- HOT BLOOD : Piment fort
(13, 21),  -- YANA START : Mangue verte
(13, 8),   -- YANA START : Cerises Péyi
(13, 6);   -- YANA START : Piment fort

INSERT INTO MEMBERS (FIRSTNAME, LASTNAME, ROLE, IMG,LINK, DESCRIPTION) VALUES
('Chouiab', 'JANAH','Product Owner','../assets/images/team/member1.png','https://www.linkedin.com/in/cjanah/',"Bonjour, je suis Janah Chouaib, un passionné de développement web âgé de 25 ans. Mon enthousiasme pour l'informatique et la programmation me pousse constamment à explorer de nouveaux horizons. Je trouve un équilibre entre ma passion pour le code et mes autres centres d'intérêt tels que les voyages, le sport et les jeux vidéo. Voyager me permet de découvrir des cultures diverses, tandis que le sport me procure l\'énergie nécessaire pour relever les défis du développement web. Les jeux vidéo sont une source de détente et de plaisir dans mon quotidien. Je suis avide d\'apprentissage et je considère chaque obstacle comme une opportunité d'acquérir de nouvelles compétences. Ma persévérance, mon courage et ma patience sont les moteurs qui me permettent d\'atteindre mes objectifs dans le monde du développement web."),
('Joël', 'MAYEMBA','Scrum Master','../assets/images/team/member3.png','https://www.linkedin.com/in/mayemba/',"Je suis Joël, un développeur web passionné par la création d'expériences en ligne mémorables et fluides. Avec trois années d'expérience solide dans le domaine du développement web, j'ai développé une expertise pointue dans la conception, le développement et la maintenance de sites web dynamiques et réactifs. Mon objectif est de combiner mon savoir-faire technique avec ma créativité pour offrir des solutions web innovantes et engageantes.");