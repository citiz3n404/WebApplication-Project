-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Mai 2016 à 17:44
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `nsz`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(5, 'Les poneys et les licornes', 'Rainbows ;D'),
(6, 'TopSecret', 'Ici on parle de choses très secrètes !'),
(7, 'WWIII', 'La fin du monde est proche.');

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

CREATE TABLE IF NOT EXISTS `dossier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `dossier`
--

INSERT INTO `dossier` (`id`, `name`, `roles`) VALUES
(1, 'Confidentiel', 'a:1:{i:0;s:9:"ROLE_USER";}'),
(2, 'Classifié', 'a:1:{i:0;s:9:"ROLE_USER";}'),
(3, 'SecretDefense', 'a:1:{i:0;s:9:"ROLE_USER";}'),
(4, 'TopSecret', 'a:1:{i:0;s:9:"ROLE_USER";}'),
(5, 'Dossier Admin', 'a:3:{i:0;s:10:"ROLE_ADMIN";i:1;s:17:"ROLE_GESTIONNAIRE";i:2;s:15:"ROLE_MODERATEUR";}');

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE IF NOT EXISTS `fichier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dossier_id` int(11) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fichier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9B76551F611C0C56` (`dossier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `fichier`
--

INSERT INTO `fichier` (`id`, `dossier_id`, `size`, `name`, `type`, `fichier`) VALUES
(1, 1, 48535, 'Chaton', 'jpeg', '841c6297cbbef0222fcde96b0a50fe23.jpeg'),
(2, 1, 33579, 'PetitTeste', 'jpeg', '757236df9853ce0767b4af8dfadf0cce.jpeg'),
(3, 3, 69655, 'Achille', 'jpeg', '499da27617b3db5fbe957f37492582bd.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `cost` double NOT NULL,
  `begin` datetime NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locked` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `title`, `teacher`, `description`, `duration`, `cost`, `begin`, `img`, `locked`) VALUES
(2, 'Fibre Optique', 'Anthony', 'Fonctionnement de la fibre optique', 7, 59, '2011-01-01 00:00:00', '617e59fc772bb6ab743de6a68557ec38.jpeg', 0),
(4, 'DataCenters', 'Edward Snowden', 'Devenez un As de la fuite !', 10, 300, '2015-01-01 00:04:00', '0ee4356756eb00e03d3241a299a3804d.jpeg', 0),
(5, 'HackPHP', 'François Holland', 'Moi je suis un kiwi', 5, 1, '2021-01-01 00:00:00', '7039f419ea7f8382de723c579fc84ec6.jpeg', 0),
(6, 'Intrusion', 'Obama', 'Apprenez à vous introduire dans tous les systèmes.', 7, 5000, '2016-07-07 00:00:00', '9b458721c158d508f94db1bdec9bccad.jpeg', 0),
(7, 'Réseau Internet', 'Jessica', 'Une aventure qui ne s''arrête pas.', 14, 3200, '2017-01-01 00:00:00', 'f011345791b0378ae8f7b76f52f81f06.jpeg', 0),
(8, 'Aucune Trace', 'Pyromane', 'Ne laissez plus aucune trace !', 5, 1999, '2019-01-01 04:00:00', '91e4afbcb0cefe071304e33b188344d0.jpeg', 0),
(9, 'Adopte un Chaton', 'Petit chat', 'Les astuces pour éviter les griffures', 8, 499, '2018-01-01 00:00:00', '4bcc6ffc76653ab0afeb1e68c93b0de9.jpeg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `validated` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5E90F6D65200282E` (`formation_id`),
  KEY `IDX_5E90F6D6A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id`, `formation_id`, `user_id`, `validated`) VALUES
(25, 2, 1, 1),
(31, 4, 1, 1),
(33, 5, 2, 1),
(34, 4, 2, 1),
(36, 5, 81, 1),
(39, 2, 81, 0),
(40, 4, 81, 0),
(41, 4, 4, 0),
(42, 5, 4, 0),
(43, 4, 34, 0),
(44, 2, 34, 1),
(45, 7, 49, 0),
(46, 8, 49, 0),
(47, 2, 49, 0),
(48, 4, 8, 0),
(49, 6, 8, 0),
(50, 8, 8, 0),
(51, 2, 8, 1),
(52, 2, 13, 0),
(53, 9, 1, 0),
(54, 9, 6, 0),
(55, 9, 7, 1),
(57, 2, 7, 0),
(58, 2, 9, 0);

-- --------------------------------------------------------

--
-- Structure de la table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A000672AA76ED395` (`user_id`),
  KEY `IDX_A000672A1F55203D` (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Contenu de la table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `topic_id`, `content`, `date`) VALUES
(42, 81, 19, 'Je vous fais une photo dès que je peux !', '2016-05-16 03:11:40'),
(43, 4, 19, 'Je suis pressé de le voir !', '2016-05-16 03:15:18'),
(44, 4, 20, 'Droitier non ?', '2016-05-16 03:54:06'),
(45, 14, 19, 'Alessard ici !', '2016-05-16 04:18:14'),
(46, 14, 21, 'Elle est comment ?', '2016-05-16 04:18:58'),
(47, 14, 20, 'Peut être gaucher.', '2016-05-16 04:22:15'),
(48, 10, 19, 'Il ressemble à quoi ?', '2016-05-16 04:23:29'),
(49, 10, 20, 'Moi je dirais droitier plutôt !', '2016-05-16 04:24:09'),
(50, 7, 19, 'Owi !! Une petite boule de poils !', '2016-05-16 04:25:21'),
(51, 7, 20, 'Oui droitier je pense !', '2016-05-16 04:25:54'),
(52, 11, 21, 'Bleue ?', '2016-05-16 04:27:12'),
(53, 11, 20, 'Gaucher ! Assurément !', '2016-05-16 04:27:43'),
(54, 9, 21, 'Rouge !', '2016-05-16 04:29:12'),
(55, 9, 19, 'Oui on veut voir !', '2016-05-16 04:29:58'),
(56, 1, 19, 'C''est moi qui ai le plus beau :p', '2016-05-16 13:54:56'),
(57, 1, 20, 'Oula! Non je ne crois pas.', '2016-05-16 14:08:48'),
(58, 13, 19, 'Non, regarde le mien !', '2016-05-16 14:19:30'),
(61, 2, 19, 'Les deux sont mignons :)', '2016-05-16 15:35:20'),
(62, 2, 21, 'RAINBOW :D', '2016-05-16 15:47:55'),
(63, 2, 20, 'Peut être bien :)', '2016-05-16 15:48:39');

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

CREATE TABLE IF NOT EXISTS `salarie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` date NOT NULL,
  `sexe` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `dateEntre` date NOT NULL,
  `typeContrat` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `DureeContrat` int(11) NOT NULL,
  `salaire` int(11) NOT NULL,
  `superieurHierarchique` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2138 ;

--
-- Contenu de la table `salarie`
--

INSERT INTO `salarie` (`id`, `nom`, `prenom`, `dateNaissance`, `sexe`, `dateEntre`, `typeContrat`, `DureeContrat`, `salaire`, `superieurHierarchique`, `img`) VALUES
(2003, 'Lessard', 'Arienne', '2011-12-21', 'F', '2015-09-14', 'CDD', 4, 2457, 0, 'b4cac46be54d9060378f3cc54fe6dd71.jpeg'),
(2004, 'Gamache', 'Franck', '2011-12-19', 'M', '1987-02-22', 'CDI', 0, 3339, 3353, 'f60f43a6fcfff9248a94f33125acabad.jpeg'),
(2005, 'St-Jacques', 'Garland', '2011-10-20', 'F', '2016-08-11', 'CDD', 8, 2460, 3958, 'e78b6959756125e67ab0604d3f9ad05f.jpeg'),
(2006, 'Lafond', 'Creissant', '2011-04-29', 'F', '1985-09-11', 'CDI', 0, 12736, 2003, '65bd137ace5ea4226c1883f4b99dbdc9.jpeg'),
(2007, 'Labrie', 'Arienne', '1978-05-14', 'F', '2004-09-22', 'CDI', 0, 3894, 3003, 'default.png'),
(2008, 'Lamoureux', 'Somerville', '2011-02-10', 'M', '2016-01-19', 'CDD', 21, 3571, 3275, '58ff354e500d45f07586fd196bdf02fa.jpeg'),
(2009, 'Roy', 'Cosette', '2011-08-04', 'F', '1998-06-11', 'CDI', 0, 10122, 2003, '2f40c489c0844eca8e21790d8ae9c8a6.jpeg'),
(2010, 'Lemelin', 'Gemma', '2011-08-08', 'F', '2016-02-29', 'CDD', 11, 10263, 2003, 'cf5c74f1c1b9f7116f892b4fea2096f3.jpeg'),
(2011, 'Bouvier', 'Bernard', '2011-07-16', 'M', '1978-11-05', 'CDI', 0, 1579, 3440, 'd42a791e09a935609993b8c671238dc3.jpeg'),
(2012, 'Abril', 'Ferragus', '2011-02-18', 'M', '1977-11-05', 'CDI', 0, 1611, 3497, 'e89c6c0663b7dd72660b8a1242ee328b.jpeg'),
(2013, 'Guay', 'Fabrice', '2011-11-07', 'M', '1981-08-19', 'CDI', 0, 3344, 2760, 'db0dd161784e07d3ad853e265957805d.jpeg'),
(2014, 'Méthot', 'Martin', '1997-10-30', 'M', '1986-12-03', 'CDI', 0, 3028, 3755, 'default.png'),
(2015, 'Labrie', 'Ninette', '2011-01-02', 'F', '2016-01-02', 'sta', 9, 3096, 2137, 'fcf144258698cde1fca1e07cd79acf74.jpeg'),
(2016, 'Cressac', 'Margaux', '2011-03-06', 'F', '2016-10-10', 'sta', 2, 14128, 2003, '56502e3c823449b407bf2dd33f0d3c27.jpeg'),
(2017, 'Descoteaux', 'Nicole', '1956-11-23', 'F', '1983-06-13', 'CDI', 0, 2131, 2390, 'default.png'),
(2018, 'Barrière', 'Nicolette', '1991-09-04', 'F', '1995-05-27', 'CDI', 0, 3176, 3040, 'default.png'),
(2019, 'Méthot', 'Fantina', '1968-06-28', 'F', '2007-04-28', 'CDI', 0, 1558, 2372, 'default.png'),
(2020, 'Parenteau', 'Yolette', '1972-12-12', 'F', '2015-02-13', 'vol', 13, 3254, 3935, 'default.png'),
(2021, 'Champagne', 'Honoré', '1985-02-16', 'M', '2003-07-01', 'CDI', 0, 1606, 3781, 'default.png'),
(2022, 'Lévesque', 'Noël', '1986-06-06', 'M', '2016-08-30', 'vol', 13, 2925, 3425, 'default.png'),
(2023, 'Metivier', 'Xavierre', '1958-02-19', 'F', '2016-08-21', 'sta', 12, 3250, 2140, 'default.png'),
(2024, 'DeGrasse', 'Namo', '1949-01-05', 'M', '2006-04-08', 'CDI', 0, 3268, 2926, 'default.png'),
(2025, 'Allard', 'Thiery', '1998-06-07', 'M', '1977-10-27', 'CDI', 0, 2147, 3833, 'default.png'),
(2026, 'Gaudreau', 'Dixie', '1979-10-23', 'F', '2009-09-07', 'CDI', 0, 2789, 3409, 'default.png'),
(2027, 'Chandonnet', 'Laetitia', '1986-03-14', 'F', '1987-01-20', 'CDI', 0, 3484, 3352, 'default.png'),
(2028, 'Belisle', 'Pansy', '1986-05-22', 'F', '1985-06-06', 'CDI', 0, 2109, 2863, 'default.png'),
(2029, 'Robert', 'Fanchon', '1952-03-21', 'F', '2015-01-21', 'CDD', 4, 1760, 3874, 'default.png'),
(2030, 'Lebrun', 'Élisabeth', '1948-04-07', 'F', '2016-10-15', 'sta', 2, 2852, 3678, 'default.png'),
(2031, 'Routhier', 'Jérôme', '1995-11-27', 'M', '2016-11-16', 'vol', 23, 1498, 3278, 'default.png'),
(2032, 'Bonneville', 'Victoire', '1955-05-19', 'F', '1991-12-19', 'CDI', 0, 1851, 3103, 'default.png'),
(2033, 'Riquier', 'Guy', '1980-04-16', 'M', '2011-10-10', 'CDI', 0, 3930, 3707, 'default.png'),
(2034, 'Ruel', 'Gay', '1963-08-15', 'F', '2016-03-13', 'CDD', 13, 2184, 3718, 'default.png'),
(2035, 'Duranseau', 'Nicolette', '1960-10-22', 'F', '2016-12-04', 'vol', 15, 3656, 2898, 'default.png'),
(2036, 'Ducharme', 'Paige', '1981-04-18', 'F', '1994-04-02', 'CDI', 0, 4332, 2003, 'default.png'),
(2037, 'Duplanty', 'Algernon', '1981-04-08', 'M', '2016-11-24', 'sta', 17, 2972, 3436, 'default.png'),
(2038, 'Lanteigne', 'Brie', '1955-12-14', 'F', '1986-06-02', 'CDI', 0, 1789, 3185, 'default.png'),
(2039, 'Dennis', 'Henri', '1963-11-21', 'M', '2014-08-04', 'CDI', 0, 11347, 2003, 'default.png'),
(2040, 'Camus', 'Voleta', '1961-01-12', 'F', '2016-10-02', 'sta', 14, 3952, 3076, 'default.png'),
(2041, 'Guay', 'Guerin', '1976-02-01', 'M', '2012-05-09', 'CDI', 0, 3686, 2067, 'default.png'),
(2042, 'Chnadonnet', 'Manon', '1947-06-30', 'F', '2016-04-28', 'CDD', 4, 1554, 3272, 'default.png'),
(2043, 'Racicot', 'Franck', '1977-11-29', 'M', '2016-04-21', 'CDD', 10, 3040, 2353, 'default.png'),
(2044, 'Gauvin', 'Gilbert', '1987-08-28', 'M', '2015-06-09', 'CDD', 23, 1995, 2904, 'default.png'),
(2045, 'Lachance', 'Iva', '1952-05-20', 'F', '2006-07-21', 'CDI', 0, 2256, 3226, 'default.png'),
(2046, 'Bazin', 'Théodore', '1975-12-13', 'M', '2002-07-08', 'CDI', 0, 3999, 3105, 'default.png'),
(2047, 'Ducharme', 'Aya', '1986-09-09', 'F', '2015-01-07', 'sta', 7, 1925, 3504, 'default.png'),
(2048, 'Perreault', 'Marsilius', '1969-05-16', 'M', '2015-11-08', 'CDD', 15, 10295, 2003, 'default.png'),
(2049, 'Routhier', 'Russell', '1992-08-02', 'M', '2001-08-14', 'CDI', 0, 13526, 2003, 'default.png'),
(2050, 'Sciverit', 'Eugène', '1964-03-26', 'M', '1975-04-08', 'CDI', 0, 3484, 3515, 'default.png'),
(2051, 'Cyr', 'Ruby', '1972-03-01', 'F', '2016-03-19', 'CDD', 5, 6093, 2003, 'default.png'),
(2052, 'Laboissonnière', 'Yolette', '1983-01-19', 'F', '2015-12-08', 'CDD', 17, 3733, 2812, 'default.png'),
(2053, 'Pouliotte', 'Alfred', '1978-08-05', 'M', '2015-05-20', 'vol', 15, 1509, 3481, 'default.png'),
(2054, 'Godin', 'Burnell', '1952-02-17', 'M', '2016-04-08', 'CDD', 21, 3111, 2088, 'default.png'),
(2055, 'Monrency', 'Arber', '1973-11-02', 'M', '2016-09-13', 'vol', 2, 3319, 2645, 'default.png'),
(2056, 'LHeureux', 'Angelette', '1963-02-19', 'F', '1981-03-24', 'CDI', 0, 9467, 2003, 'default.png'),
(2057, 'Fresne', 'Sidney', '1990-10-23', 'M', '2011-04-21', 'CDI', 0, 9431, 2003, 'default.png'),
(2058, 'Rodrigue', 'Christian', '1958-06-27', 'M', '2016-04-28', 'sta', 15, 6513, 2003, 'default.png'),
(2059, 'Goddu', 'Belisarda', '1966-01-01', 'F', '2016-10-05', 'sta', 11, 2415, 2242, 'default.png'),
(2060, 'Martin', 'Fanette', '1954-01-16', 'F', '2015-06-10', 'sta', 15, 3645, 2049, 'default.png'),
(2061, 'Goudreau', 'Brie', '1967-11-19', 'F', '1993-01-11', 'CDI', 0, 1675, 2674, 'default.png'),
(2062, 'Villeneuve', 'Aimée', '1980-09-07', 'F', '2016-04-01', 'sta', 16, 3338, 3718, 'default.png'),
(2063, 'Latourelle', 'Manon', '1960-08-05', 'F', '2008-12-16', 'CDI', 0, 3427, 3559, 'default.png'),
(2064, 'Rancourt', 'Vick', '1960-09-03', 'M', '2015-10-16', 'CDD', 9, 4254, 2003, 'default.png'),
(2065, 'Rouze', 'William', '1972-07-10', 'M', '2002-11-28', 'CDI', 0, 2637, 2775, 'default.png'),
(2066, 'Bonneville', 'Quincy', '1995-03-26', 'M', '2016-10-19', 'CDD', 8, 4174, 2003, 'default.png'),
(2067, 'Chandonnet', 'Talon', '1976-08-25', 'M', '2015-07-25', 'CDD', 13, 15992, 2003, 'default.png'),
(2068, 'Bourdette', 'Stéphane', '1970-01-27', 'M', '2015-05-14', 'CDD', 8, 6590, 2003, 'default.png'),
(2069, 'Cyr', 'Dexter', '1971-02-26', 'M', '2016-02-18', 'CDD', 20, 1669, 3783, 'default.png'),
(2070, 'Dupont', 'Vachel', '1998-03-30', 'M', '2015-03-27', 'sta', 17, 5906, 2003, 'default.png'),
(2071, 'Tanguay', 'Pauline', '1969-11-28', 'F', '2002-02-27', 'CDI', 0, 8281, 2003, 'default.png'),
(2072, 'Charrette', 'Hilaire', '1963-08-15', 'F', '2015-09-13', 'CDD', 5, 2817, 3443, 'default.png'),
(2073, 'Bizier', 'Brice', '1959-03-20', 'F', '1990-02-24', 'CDI', 0, 2666, 3700, 'default.png'),
(2074, 'Ducharme', 'Brie', '1948-04-07', 'F', '1976-04-27', 'CDI', 0, 14615, 2003, 'default.png'),
(2075, 'Paiement', 'Audrey', '1990-05-09', 'F', '2015-09-14', 'CDD', 21, 1741, 2073, 'default.png'),
(2076, 'Bonneville', 'Soren', '1986-05-10', 'M', '2013-10-21', 'CDI', 0, 2654, 3211, 'default.png'),
(2077, 'Plante', 'Morgana', '1947-07-07', 'F', '2015-04-08', 'sta', 22, 1588, 2946, 'default.png'),
(2078, 'Fresne', 'Jeannine', '1973-10-29', 'F', '1987-11-01', 'CDI', 0, 1646, 2168, 'default.png'),
(2079, 'Laboissonnière', 'Odette', '1949-06-01', 'F', '1981-01-28', 'CDI', 0, 3227, 2529, 'default.png'),
(2080, 'Méthot', 'Adorlee', '1978-12-26', 'F', '2016-06-22', 'sta', 23, 3796, 3627, 'default.png'),
(2081, 'Lacasse', 'Prunella', '1947-05-28', 'F', '2014-08-07', 'CDI', 0, 2745, 2688, 'default.png'),
(2082, 'Bédard', 'Théodore', '1947-06-09', 'M', '2016-02-14', 'CDD', 5, 2265, 2663, 'default.png'),
(2083, 'Joly', 'Aimée', '1955-03-18', 'F', '2007-09-09', 'CDI', 0, 15822, 2003, 'default.png'),
(2084, 'Roussel', 'Olivier', '1951-09-07', 'M', '2016-04-05', 'CDD', 14, 15967, 2003, 'default.png'),
(2085, 'Doucet', 'Aimée', '1964-08-04', 'F', '0000-00-00', 'CDD', 10, 1791, 2154, 'default.png'),
(2086, 'Chatigny', 'Élisabeth', '1952-07-10', 'F', '2007-07-01', 'CDI', 0, 4087, 2003, 'default.png'),
(2087, 'Plouffe', 'Matilda', '1969-05-10', 'F', '1983-02-08', 'CDI', 0, 3116, 2560, 'default.png'),
(2088, 'Bisaillon', 'Didiane', '1955-12-15', 'F', '1994-04-26', 'CDI', 0, 10906, 2003, 'default.png'),
(2089, 'Paquet', 'Eloise', '1993-10-21', 'F', '2015-08-29', 'CDD', 24, 2559, 2526, 'default.png'),
(2090, 'Daviau', 'Alexandrie', '1969-11-16', 'F', '2016-03-22', 'vol', 14, 2947, 2151, 'default.png'),
(2091, 'Létourneau', 'Nanna', '1989-05-22', 'F', '2016-12-15', 'CDD', 21, 3450, 4000, 'default.png'),
(2092, 'Auclair', 'Aloin', '1971-07-12', 'M', '2014-10-29', 'CDI', 0, 2407, 3409, 'default.png'),
(2093, 'Trottier', 'Joseph', '1979-05-14', 'M', '1995-11-12', 'CDI', 0, 1909, 3913, 'default.png'),
(2094, 'Chartier', 'Eulalie', '1981-09-10', 'F', '2011-05-05', 'CDI', 0, 5682, 2003, 'default.png'),
(2095, 'Létourneau', 'Corinne', '1962-03-19', 'F', '2016-02-28', 'CDD', 4, 10862, 2003, 'default.png'),
(2096, 'Garreau', 'Didiane', '1970-10-29', 'F', '1985-12-13', 'CDI', 0, 1797, 3798, 'default.png'),
(2097, 'Raymond', 'Maryse', '1989-05-24', 'F', '2016-04-20', 'vol', 22, 2230, 3828, 'default.png'),
(2098, 'Létourneau', 'Florence', '1979-10-08', 'F', '2004-07-24', 'CDI', 0, 5932, 2003, 'default.png'),
(2099, 'Savoie', 'Honore', '1980-06-18', 'F', '2011-07-26', 'CDI', 0, 1490, 3170, 'default.png'),
(2100, 'Clavet', 'Norris', '1947-07-21', 'M', '2015-04-19', 'CDD', 18, 1993, 2335, 'default.png'),
(2101, 'Dupéré', 'Chapin', '1998-09-24', 'M', '2015-08-15', 'CDI', 0, 12867, 2003, 'default.png'),
(2102, 'Petit', 'Arno', '1993-12-18', 'M', '2015-03-14', 'vol', 17, 2426, 3700, 'default.png'),
(2103, 'Veronneau', 'Methena', '1997-11-17', 'F', '2016-01-29', 'vol', 5, 14667, 2003, 'default.png'),
(2104, 'LeBatelier', 'Alacoque', '1954-12-16', 'F', '2015-08-15', 'CDD', 4, 3978, 3125, 'default.png'),
(2105, 'Rochefort', 'Olivier', '1998-05-28', 'M', '2009-08-18', 'CDI', 0, 1549, 2875, 'default.png'),
(2106, 'Champagne', 'Théophile', '1960-09-06', 'M', '2006-06-30', 'CDI', 0, 3318, 2737, 'default.png'),
(2107, 'Senneville', 'Sacripant', '1968-05-04', 'M', '2015-08-07', 'vol', 6, 5685, 2003, 'default.png'),
(2108, 'Guay', 'Océane', '1997-04-22', 'F', '1988-06-16', 'CDI', 0, 2599, 3131, 'default.png'),
(2109, 'Gareau', 'Daniel', '1997-07-09', 'M', '2015-03-01', 'CDD', 17, 4364, 2003, 'default.png'),
(2110, 'Fortier', 'Odette', '1955-06-19', 'F', '2000-02-28', 'CDI', 0, 4449, 2003, 'default.png'),
(2111, 'Laux', 'Daniel', '1995-05-17', 'M', '2013-11-27', 'CDI', 0, 10052, 2003, 'default.png'),
(2112, 'Favreau', 'Manon', '1962-08-16', 'F', '1985-08-07', 'CDI', 0, 1487, 3780, 'default.png'),
(2113, 'Duranseau', 'Christophe', '1982-10-07', 'M', '2015-05-17', 'CDD', 15, 2308, 2283, 'default.png'),
(2114, 'Brian', 'Patience', '1973-07-01', 'F', '1991-04-29', 'CDI', 0, 10505, 2003, 'default.png'),
(2115, 'Riel', 'Vachel', '1963-09-23', 'M', '2012-10-01', 'CDI', 0, 3178, 2790, 'default.png'),
(2116, 'Varieur', 'Rule', '1976-02-05', 'M', '2015-05-22', 'sta', 22, 1955, 3974, 'default.png'),
(2117, 'Courtemanche', 'Clarice', '1984-12-27', 'F', '1987-11-09', 'CDI', 0, 1480, 3185, 'default.png'),
(2118, 'Plouffe', 'Belle', '1990-10-02', 'F', '2000-02-29', 'CDI', 0, 1773, 3251, 'default.png'),
(2119, 'Tanguay', 'Alphonsine', '1980-02-10', 'F', '2016-03-06', 'sta', 4, 3945, 3564, 'default.png'),
(2120, 'Pelchat', 'Legget', '1974-09-08', 'M', '2015-11-17', 'CDD', 14, 2651, 3564, 'default.png'),
(2121, 'Despins', 'Minette', '1954-08-14', 'F', '2016-03-20', 'sta', 10, 4373, 2003, 'default.png'),
(2122, 'Caouette', 'Noémi', '1951-10-27', 'F', '2015-10-14', 'sta', 18, 2495, 3982, 'default.png'),
(2123, 'Viens', 'Florence', '1992-02-25', 'F', '2015-06-13', 'CDI', 0, 12510, 2003, 'default.png'),
(2124, 'Laisné', 'Morgana', '1993-12-28', 'F', '2015-12-13', 'sta', 4, 15128, 2003, 'default.png'),
(2125, 'Varieur', 'Dreux', '1996-03-21', 'M', '1986-11-22', 'CDI', 0, 2014, 3092, 'default.png'),
(2126, 'Desaulniers', 'Emmeline', '1963-10-13', 'F', '1996-08-12', 'CDI', 0, 1975, 2420, 'default.png'),
(2127, 'Deschênes', 'Jules', '1998-06-12', 'M', '2015-09-16', 'sta', 12, 1540, 2435, 'default.png'),
(2128, 'Villeneuve', 'Odette', '1955-02-26', 'F', '1995-06-04', 'CDI', 0, 11280, 2003, 'default.png'),
(2129, 'Ruel', 'Margaux', '1950-12-30', 'F', '2016-02-15', 'CDI', 0, 1694, 2339, 'default.png'),
(2130, 'Pichette', 'Dorothée', '1996-03-29', 'F', '2015-03-12', 'vol', 14, 8480, 2003, 'default.png'),
(2131, 'Gauthier', 'Audrey', '1962-12-15', 'F', '2016-09-30', 'sta', 7, 5841, 2003, 'default.png'),
(2132, 'Mazuret', 'Jay', '1966-11-08', 'M', '2015-04-13', 'sta', 15, 1744, 2120, 'default.png'),
(2133, 'Bonami', 'Tearlach', '1979-03-15', 'M', '1999-07-14', 'CDI', 0, 1534, 3836, 'default.png'),
(2134, 'Duhamel', 'Channing', '1958-10-26', 'M', '1994-09-19', 'CDI', 0, 1813, 3804, 'default.png'),
(2135, 'Dastous', 'Namo', '1965-09-03', 'M', '1982-12-20', 'CDI', 0, 3289, 2376, 'default.png'),
(2136, 'Courtemanche', 'Fleur', '1964-02-09', 'F', '1998-09-13', 'CDI', 0, 2809, 2068, 'default.png'),
(2137, 'Langlois', 'Burkett', '1948-01-20', 'M', '2004-06-02', 'CDI', 0, 11536, 2003, 'default.png');

-- --------------------------------------------------------

--
-- Structure de la table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_91F64639A76ED395` (`user_id`),
  KEY `IDX_91F64639BCF5E72D` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Contenu de la table `topics`
--

INSERT INTO `topics` (`id`, `user_id`, `categorie_id`, `subject`, `date`) VALUES
(19, 81, 5, 'Mon chat est trop mignon !!', '2016-05-16 03:10:06'),
(20, 81, 6, 'Vladimir est gaucher ou droitier ?', '2016-05-16 03:11:03'),
(21, 4, 5, 'La licorne du jardin', '2016-05-16 03:13:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salarie_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_1483A5E95859934A` (`salarie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=136 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `salarie_id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 2003, 'alessard', 'alessard', 'arienne.lessard@nsz.com', 'arienne.lessard@nsz.com', 1, 'r95y196fjnk4cskcowoos0og8ggcg04', '$2y$13$0RORMRkW6rFWfBF9HGce6uV7U1EVLO3EX/rNNIQQCm/MIswhls5BO', '2016-05-16 16:36:49', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(2, 2004, 'fgamache', 'fgamache', 'franck.gamache@nsz.com', 'franck.gamache@nsz.com', 1, 'wihghem2bjks48wc4ok08ws0ckc44s', '$2y$13$d00kuiuksuGhf6tCtk1IzeT8eKSGPzzN4m46qpU1Z0TBc7kxHbsKS', '2016-05-16 15:28:07', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:17:"ROLE_GESTIONNAIRE";}', 0, NULL),
(3, 2005, 'gst-jacques', 'gst-jacques', 'garland.st-jacques@nsz.com', 'garland.st-jacques@nsz.com', 1, 'bw5uh5nyz3co4848800oso0o40wgk48', '$2y$13$Kd2Cd5wtuPPIE8HUHyslhe6gQ3iwzy/XzkNVPxb5K/sYB2MwOyW7O', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(4, 2006, 'clafond', 'clafond', 'creissant.lafond@nsz.com', 'creissant.lafond@nsz.com', 1, 'mfbzwlyr81cssooo44c8o000wkkows0', '$2y$13$mpvkj6dmNo9qfiVOPfBub.JqYIzCnB2dy1S7Ndl/vx7s7eVSwpNDW', '2016-05-16 03:52:56', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:7:"ROLE_RH";}', 0, NULL),
(5, 2007, 'alabrie', 'alabrie', 'arienne.labrie@nsz.com', 'arienne.labrie@nsz.com', 1, 'ph1ta3dnrm888s8w4k0wc48w0o8g8o0', '$2y$13$ikUU40NIMGVb/cM7Q3Mcq.f1zGjSKWBi6W9tekmakLPc87xwTXKxK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(6, 2008, 'slamoureux', 'slamoureux', 'somerville.lamoureux@nsz.com', 'somerville.lamoureux@nsz.com', 1, 'rnbfampftsg8gsg8888o00gsgw84o84', '$2y$13$8HXr20i13eKHg7pvw7rtDOh3aEsP/KugtTxazTd8dfrZ.pM.Suu4q', '2016-05-15 17:52:13', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(7, 2009, 'croy', 'croy', 'cosette.roy@nsz.com', 'cosette.roy@nsz.com', 1, 'qrttxcwe55c8kskgww8c8kss8gkgg88', '$2y$13$LQyJekxMawi2HNumo3J58uEcriwknDASqLDf5M5x7c8IpYktithei', '2016-05-16 04:24:48', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_FORMATEUR";}', 0, NULL),
(8, 2010, 'glemelin', 'glemelin', 'gemma.lemelin@nsz.com', 'gemma.lemelin@nsz.com', 1, 'e9vcjc42528kccgk4sco0wkkskkgwsg', '$2y$13$ptSJejIiaGBpCSBQ9xdgPu2owkPrQu3DtFvE9A1YkX0rm5OdkhVei', '2016-05-14 15:34:24', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(9, 2011, 'bbouvier', 'bbouvier', 'bernard.bouvier@nsz.com', 'bernard.bouvier@nsz.com', 1, 'eiqg2x090zwo48w8os4ssc8ko0scogc', '$2y$13$kBcge00IdVJQSM8B5UMlO.GrUFawGBlWGziYEPhvsa5c83aCc6BdO', '2016-05-16 04:28:34', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(10, 2012, 'fabril', 'fabril', 'ferragus.abril@nsz.com', 'ferragus.abril@nsz.com', 1, 'foz74t7oq3kkk8osg0ogkkk8w4sw8s0', '$2y$13$.jPGs1rtLl6aPbbK3f6U2u4yPx82XR3OTnOo6smjxeZFVx0cdY13C', '2016-05-16 04:23:01', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(11, 2013, 'fguay', 'fguay', 'fabrice.guay@nsz.com', 'fabrice.guay@nsz.com', 1, 'to1t47qtrz4k08gw0c8gw4gwgs8o4so', '$2y$13$34qZMpIkqvtkF/YTBEO6luMxY5cHM5/m8PQRIabAZFxT0U3TBW6T.', '2016-05-16 04:26:23', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(12, 2014, 'mmn-thot', 'mmn-thot', 'martin.mn-thot@nsz.com', 'martin.mn-thot@nsz.com', 1, 'msejgy1h49ccwg0swo4ksswcg44sk08', '$2y$13$Y4Sp.Fln/0k2t9eksUyijO0sx0r8P1VnRwQkWwX1Ygqv9vtBB69Ci', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(13, 2015, 'nlabrie', 'nlabrie', 'ninette.labrie@nsz.com', 'ninette.labrie@nsz.com', 1, 'nqlc2va14ggcccokogsk8kkgwogk04o', '$2y$13$ybY7UhjFampOY0IZic9TAe3leil1TSWotUzwISo0VuoSC62xNhTvi', '2016-05-16 14:18:56', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:15:"ROLE_MODERATEUR";}', 0, NULL),
(14, 2016, 'mcressac', 'mcressac', 'margaux.cressac@nsz.com', 'margaux.cressac@nsz.com', 1, '50oj1uku0mww4gks4cs0cwkogoswg00', '$2y$13$J2EmHlDh2FBYns/dXCEAouSDG4sZy/Q7LM57H/BacTTR79b6Ecyfm', '2016-05-16 16:51:13', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(15, 2017, 'ndescoteaux', 'ndescoteaux', 'nicole.descoteaux@nsz.com', 'nicole.descoteaux@nsz.com', 1, 'p1cmmoyxum84c0ks4gkow0kg00w0wos', '$2y$13$sCmRFrYz7ID9lzbgvetGcuMMGtHdbUFQePF2Bm2.S.d7B/T6NPsAK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(16, 2018, 'nbarrin-re', 'nbarrin-re', 'nicolette.barrin-re@nsz.com', 'nicolette.barrin-re@nsz.com', 1, '4cc6uyphyxycc0k0gws8c80ocwo0wws', '$2y$13$AQ3TVEFcFT28opvyecP3nephWBBHnUrU8RK42JKF8ft4gcigMUZvi', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(17, 2019, 'fmn-thot', 'fmn-thot', 'fantina.mn-thot@nsz.com', 'fantina.mn-thot@nsz.com', 1, '2a3wodt8olgksgsswkwscoco8osoggo', '$2y$13$5eAYuZh8HxRsUYG9t0lQsOLoCmVDPFotrGC.uT7l2BzLo8zT5Y9FK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(18, 2020, 'yparenteau', 'yparenteau', 'yolette.parenteau@nsz.com', 'yolette.parenteau@nsz.com', 1, 'qvaoujrx34g8c4c0w0kg84kw88ksk48', '$2y$13$B1mKqnbdRGJMBxa6XwBViuVkjrW4gyspvf8R4QAuhKdMyIO1ey3ZK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(19, 2021, 'hchampagne', 'hchampagne', 'honorn-.champagne@nsz.com', 'honorn-.champagne@nsz.com', 1, '5iny8w246y4owgw00g44cwc0kc80044', '$2y$13$o8H1S4Exg1bIEyZgTovhGO09.CTadABAdaqMC2iZ5ZTl.mxFiPr.S', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(20, 2022, 'nln-vesque', 'nln-vesque', 'non-l.ln-vesque@nsz.com', 'non-l.ln-vesque@nsz.com', 1, '4m6kp6l7jbeo88kc48cw00w84gkog0g', '$2y$13$K7zSB6mCT3kZhHOomJH9MOx67JEO1tNutSDlF5Vivhki.6o.3wh4y', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(21, 2023, 'xmetivier', 'xmetivier', 'xavierre.metivier@nsz.com', 'xavierre.metivier@nsz.com', 1, 'tjqt4p0rhqo8skc0c8cg840s8owo8kc', '$2y$13$Y58NM5V9miX8Jf3x5Z6ZYui9JRkw.dhrN9kA8/FGImSKI5C/kcYDq', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(22, 2024, 'ndegrasse', 'ndegrasse', 'namo.degrasse@nsz.com', 'namo.degrasse@nsz.com', 1, 'e57jkn7i0vswgcs8wgkok8s8kks084o', '$2y$13$rBHsoIdRpxYrx8xu2vJTKOok1K6V.LblYEkUA4B.nfsA9IX1l3puG', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(23, 2025, 'tallard', 'tallard', 'thiery.allard@nsz.com', 'thiery.allard@nsz.com', 1, 'lhhni70si9s0w004koww0ck0c4wsssc', '$2y$13$WhqOOY9hU1PZYNkhBVR5pOZUZDYazXcllSzoQ2SmJEugtT1AMWrTe', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(24, 2026, 'dgaudreau', 'dgaudreau', 'dixie.gaudreau@nsz.com', 'dixie.gaudreau@nsz.com', 1, 'ccf79rjtewgscwo84oow4kk0gkckgc8', '$2y$13$AMw2D87tBTNGo3t9aRwTnerRnGS/q3Z5U9fY9MW06P0ENOiJHKyFy', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(25, 2027, 'lchandonnet', 'lchandonnet', 'laetitia.chandonnet@nsz.com', 'laetitia.chandonnet@nsz.com', 1, 'flgz4fmzom0c0k8wcw48o08s8sckc0g', '$2y$13$yXdTuboz2gHyJ5Jf5ucVk.t41pVXbb/0ygu0yTVPbbvdhw47XlUWG', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(26, 2028, 'pbelisle', 'pbelisle', 'pansy.belisle@nsz.com', 'pansy.belisle@nsz.com', 1, 'bsyu737lc34ss4g0gokc4ksgsogosks', '$2y$13$UwcwAJ3oYh.fWj1vY3p3KOhLJ38eavpjsUwwJsKQbaSAUSnHkZ4Ve', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(27, 2029, 'frobert', 'frobert', 'fanchon.robert@nsz.com', 'fanchon.robert@nsz.com', 1, 'mhrc7srun400wk8skss8cgkowkoogoc', '$2y$13$0vXrJXZ9g6tLf52VzELkA.FyuvVKceVcHtjSl9WAZ2NTdWfvHimIq', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(28, 2030, 'nlebrun', 'nlebrun', 'nnlisabeth.lebrun@nsz.com', 'nnlisabeth.lebrun@nsz.com', 1, 'ik4m0cerrjsw0cswsc8k84s04c0wcws', '$2y$13$klYZtlfIL9d4rCvhTfEdtuQAA3Q5RfXCNgCn/2.MO83Lic5ZddFHm', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(29, 2031, 'jrouthier', 'jrouthier', 'jn-rnime.routhier@nsz.com', 'jn-rnime.routhier@nsz.com', 1, '8br3f4rfek8wkwg48kk808oc0g4c8wo', '$2y$13$zYZSyaElTLWiOYYl8/KdKO92/cAclJtSve8rgwSCsTWFsAcPa7hMe', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(30, 2032, 'vbonneville', 'vbonneville', 'victoire.bonneville@nsz.com', 'victoire.bonneville@nsz.com', 1, 'qtglwsv19jk8kc00skw08k08k48skgw', '$2y$13$s6kMO1sg1l4aDgUSK17loeJVXlLk5kRp9WOpj88vHSzdC4LwxxNXG', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(31, 2033, 'griquier', 'griquier', 'guy.riquier@nsz.com', 'guy.riquier@nsz.com', 1, 'jtu5u8kw62o48w8kkooskgckosskso0', '$2y$13$1k5ICinrkznd6ccf9/7sMexDp2dFMk1A5y.0DE32/WX5U6.3qEl7q', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(32, 2034, 'gruel', 'gruel', 'gay.ruel@nsz.com', 'gay.ruel@nsz.com', 1, '16ytga8gpabk8c00swccg0wcs00kgsc', '$2y$13$rgCL3/dbzSIKBWVzGY1SsOdv8fO1Ph08JeLdbphwe5CI2dfZmpa.e', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(33, 2035, 'nduranseau', 'nduranseau', 'nicolette.duranseau@nsz.com', 'nicolette.duranseau@nsz.com', 1, '87pr7z9c1eccg80owoo084wosc00w80', '$2y$13$v8haFd4g/ySRB7nidgnrl.9t5BM29Zc8MA0OAm1qSNgXRdkYEcjES', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(34, 2036, 'pducharme', 'pducharme', 'paige.ducharme@nsz.com', 'paige.ducharme@nsz.com', 1, 'kcd6kr69x7kkc0ows8oow0o8c8oc08c', '$2y$13$hcspLCv9GXfewq.8SnmkE.qfpThseAfsNJVd/G55AxiQijrlqiD.q', '2016-05-13 21:24:25', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(35, 2037, 'aduplanty', 'aduplanty', 'algernon.duplanty@nsz.com', 'algernon.duplanty@nsz.com', 1, 'q8kzti5xmlcgo88k84oo0gwcss88ss8', '$2y$13$uQQExSuws6fBh27lQdJ28.iPV8wJRemBhxJzRPYPA2Rz6LOO2SiFG', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(36, 2038, 'blanteigne', 'blanteigne', 'brie.lanteigne@nsz.com', 'brie.lanteigne@nsz.com', 1, '9g1zoqjypucc8go4wgws4gw8wc0ggw8', '$2y$13$0u5eKja41aJRS4x/zfQBNuaOdNbBqJaU6Xrv0HvYybZcBjsldGR02', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(37, 2039, 'hdennis', 'hdennis', 'henri.dennis@nsz.com', 'henri.dennis@nsz.com', 1, 'myqoo276i5wcsokwc0cc4kkg0wg4ook', '$2y$13$bH1QDUqlkASCk395L5zxreJ7/OpFJ2DMPKknydTejYnbhCG56HxZS', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(38, 2040, 'vcamus', 'vcamus', 'voleta.camus@nsz.com', 'voleta.camus@nsz.com', 1, 'ccxdua36z14c4kwcwk88wgog08oo88w', '$2y$13$H4CWe8.8m8GEHwLYxBXFGuiL1L24jca5bpIn9G6A6ewYIYpRczvZC', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(39, 2041, 'gguay', 'gguay', 'guerin.guay@nsz.com', 'guerin.guay@nsz.com', 1, 'ra9rutdu51wsc8scockg40gscgwk0cw', '$2y$13$dPzprUpXebTwQKMaGpO48.eU7l0cZYhpCTlO7NGy/VY5x9zN87MUi', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(40, 2042, 'mchnadonnet', 'mchnadonnet', 'manon.chnadonnet@nsz.com', 'manon.chnadonnet@nsz.com', 1, 'gth6fig4jvsosocs4k0wg8o8gg4k8gw', '$2y$13$csq.JpmPDHZ7XxKBoYs0tOQNI9EFoueoNO1O7uZVFsxXW1zZkxdri', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(41, 2043, 'fracicot', 'fracicot', 'franck.racicot@nsz.com', 'franck.racicot@nsz.com', 1, 'o2ut47dtif40wk84ggwkc0400o48wo8', '$2y$13$T8rEtU88b22M3hFSpZuhz.k7BUt42t2tiePiNF4xUHF6IYImnruiC', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(42, 2044, 'ggauvin', 'ggauvin', 'gilbert.gauvin@nsz.com', 'gilbert.gauvin@nsz.com', 1, 'plbbzb3986oogkgo4ckk8c88okc0gk4', '$2y$13$zUANmN4ny4dIUUb6GtQV7eZiF9isGhtRppIStpw6qCDBQORlWMdlK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(43, 2045, 'ilachance', 'ilachance', 'iva.lachance@nsz.com', 'iva.lachance@nsz.com', 1, '8ftxs1a7kl4wg048oo0000sss4osw0c', '$2y$13$9Wgi33jKuMghF8sWfzvLZedKQ.IJL.uvhlZDHljHAhmu5//l1cZde', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(44, 2046, 'tbazin', 'tbazin', 'thn-odore.bazin@nsz.com', 'thn-odore.bazin@nsz.com', 1, '6ouzcwardkcogw80cg88cc4s84sg8g4', '$2y$13$uEhyd.CP.bpKKlEWPZu.9OXQlrZylGq06VVMg82quJ9rOjHTeKRru', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(45, 2047, 'aducharme', 'aducharme', 'aya.ducharme@nsz.com', 'aya.ducharme@nsz.com', 1, 'hru20tvlwm0ckw4kkwo480ow488kk0g', '$2y$13$zz9POKuP5andhzFplfYuP.IBANRvNNvGWwhx5llpT6alG7Y/EnhX.', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(46, 2048, 'mperreault', 'mperreault', 'marsilius.perreault@nsz.com', 'marsilius.perreault@nsz.com', 1, '50vfkd31kls80ssgwco40c8goo8o04o', '$2y$13$GP49rYYtbhIK.g6gSym55u.0Y4YUFULdb2rADuVYBK8mPzeU3qote', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(47, 2049, 'rrouthier', 'rrouthier', 'russell.routhier@nsz.com', 'russell.routhier@nsz.com', 1, '31tjey6mem800c8g8k8g8s4o0o8woko', '$2y$13$WGSdticQfZNELVThVtd/iuf6.fED2dbpHrUMrz.XHUbACxea6HZl6', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(48, 2050, 'esciverit', 'esciverit', 'eugn-ne.sciverit@nsz.com', 'eugn-ne.sciverit@nsz.com', 1, 'kngtzhn1yyo444skw0oo0ccwcs008cc', '$2y$13$Dt.QyaF2lTUe7AubQuYNp.v0b/O8JX3nbdtgU/2gSpJZt9B1HsiJy', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(49, 2051, 'rcyr', 'rcyr', 'ruby.cyr@nsz.com', 'ruby.cyr@nsz.com', 1, 'mcic1g6l0ys0ks04sskkwwg0o4cwgss', '$2y$13$gnsRTPcpYUao94YpwfUjIeP96sEFC9fvf.iX.MQs6t2M3TJ/M2a6q', '2016-05-13 22:01:36', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(50, 2052, 'ylaboissonnin-re', 'ylaboissonnin-re', 'yolette.laboissonnin-re@nsz.com', 'yolette.laboissonnin-re@nsz.com', 1, 'iiaes314dag4wsc8cccs0c40c0cowks', '$2y$13$qkWFTHjHVmuAhPryPc/eEuu1DC3hrygn2A7WSpadsbG70AtLYslRm', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(51, 2053, 'apouliotte', 'apouliotte', 'alfred.pouliotte@nsz.com', 'alfred.pouliotte@nsz.com', 1, 'lgtee0gy4pwwk80wk0og84csgkosg0s', '$2y$13$j/gBIrf/Nw2uz1rh.akai.1IFTnzBCaPd9PEaq.r5qVzv9np/u4ge', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(52, 2054, 'bgodin', 'bgodin', 'burnell.godin@nsz.com', 'burnell.godin@nsz.com', 1, '92tokhuktg4coo4k8c884o8ksksc80w', '$2y$13$o1gbHuW6FoFr91Ze7qIgAuOvSH7fGjterKdbbegPR.FM11QRa5zPW', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(53, 2055, 'amonrency', 'amonrency', 'arber.monrency@nsz.com', 'arber.monrency@nsz.com', 1, 'du3hjlxjrq8gssccsk0kgcgoocockk0', '$2y$13$SOOPj8C7rRl/j03OKioOnO4cwP0czPa9qS.KSiptWV8DXPCY/5KXK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(54, 2056, 'alheureux', 'alheureux', 'angelette.lheureux@nsz.com', 'angelette.lheureux@nsz.com', 1, 'rzfr3opmw0g880g0k0oocw8cssks0c4', '$2y$13$5GDPUeydG7ifQOuT04bvI.H9mm36jrNLdQ/8dDovMFmhrP5Zw3v/G', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(55, 2057, 'sfresne', 'sfresne', 'sidney.fresne@nsz.com', 'sidney.fresne@nsz.com', 1, 'g55yb0qqwl4wc4cggk8osgggwc8k4ss', '$2y$13$LLfG890KK68eRuzEdJWNb.SC7KHPy2NisbW6A9sfSpWK/SZpFcNFi', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(56, 2058, 'crodrigue', 'crodrigue', 'christian.rodrigue@nsz.com', 'christian.rodrigue@nsz.com', 1, 'edtnyvw7o5wsw8c0ww4wsos4kcoss4o', '$2y$13$MVx.XHqzdOMchrlL1ObL7uCVWfIrKLysy.wB8DqEYq7T4hJNFAhbG', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(57, 2059, 'bgoddu', 'bgoddu', 'belisarda.goddu@nsz.com', 'belisarda.goddu@nsz.com', 1, 'ol24a7a39vk48w8cg0okk008w0k8g80', '$2y$13$/ykSTM6DIgnshnO7hsjsVeBPA2iaRT9pls8ZyBPscgH7tpMplsI/6', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(58, 2060, 'fmartin', 'fmartin', 'fanette.martin@nsz.com', 'fanette.martin@nsz.com', 1, 'aubswn37qf40440kgo0kg04ks4g00kc', '$2y$13$U9tYKnzWWAKftCI5VYLfGuZG7g4RHBzed/q3irw4yPhA0napc4evy', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(59, 2061, 'bgoudreau', 'bgoudreau', 'brie.goudreau@nsz.com', 'brie.goudreau@nsz.com', 1, '5w4afqorbmgwcock08sock8co084o0w', '$2y$13$LB4gTq0XFJvswhCuwqqFVOUYbtlMVEuPuF7H7cjAIbKrRZcYylP.i', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(60, 2062, 'avilleneuve', 'avilleneuve', 'aimn-e.villeneuve@nsz.com', 'aimn-e.villeneuve@nsz.com', 1, 'dqryjjlhrvkgcc0o4c00okkwkg4g8gg', '$2y$13$DKcR4NUSIZ8Kq8MOyVDBe.x5a4haIFHEk5hyYZhs3nc3wbvytxIzy', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(61, 2063, 'mlatourelle', 'mlatourelle', 'manon.latourelle@nsz.com', 'manon.latourelle@nsz.com', 1, 'kn8b4p4fes088o08ok0o040k4g04k0w', '$2y$13$U5KICB5NFGtnQPgbXQZ3VukdaWgDW/HOD3Otz.ysny.IgGMQ9PYDm', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(62, 2064, 'vrancourt', 'vrancourt', 'vick.rancourt@nsz.com', 'vick.rancourt@nsz.com', 1, 'dv7vp2aim1skc8kog4osc4ssckggsg0', '$2y$13$6H3HqqOBX2h79QFQSQzRSO/QfzynTu5yT15KwoaLikZ/T8pkZ27Xm', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(63, 2065, 'wrouze', 'wrouze', 'william.rouze@nsz.com', 'william.rouze@nsz.com', 1, 'n9vte0wpmvk84koogcg4wwo0cwss44s', '$2y$13$HW/9qXg3Ci6Uwg59yoS/jeVkvTuhLI1UhtJYWpbqBltWafT4AONZK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(64, 2066, 'qbonneville', 'qbonneville', 'quincy.bonneville@nsz.com', 'quincy.bonneville@nsz.com', 1, 'h0wy66ivzpws0cowc4wgwg4csgkwk8w', '$2y$13$LxWWtTvgrgR2.4k.PZJsneK/YEIqYjL6fIgzN2oeiLBRP0bbLSyjG', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(65, 2067, 'tchandonnet', 'tchandonnet', 'talon.chandonnet@nsz.com', 'talon.chandonnet@nsz.com', 1, 'dicta2fewvcok8ogkk0kog4g844w4c4', '$2y$13$yJSqYHlVrkRyq9iHE1KZyuXlWOXFQODEfZoQzIRtOsi3EOKe5TG8a', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(66, 2068, 'sbourdette', 'sbourdette', 'stn-phane.bourdette@nsz.com', 'stn-phane.bourdette@nsz.com', 1, 'lgt7dlmrd1wog40ks4044g4c000gckc', '$2y$13$c6IhVyAo1psdljaU5Fo6k.VPbmwWo9xmpRW1q9bk5YefugFz8uLvG', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(67, 2069, 'dcyr', 'dcyr', 'dexter.cyr@nsz.com', 'dexter.cyr@nsz.com', 1, 'bb5g5sqrqqgco00g8sswcook8s44cs8', '$2y$13$Vx5yaKsiK/kyfuCA/s5aO.oSR1jjdyAyHLGXgbpmZnS0JfFFEb5/G', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(68, 2070, 'vdupont', 'vdupont', 'vachel.dupont@nsz.com', 'vachel.dupont@nsz.com', 1, '3pd8a9l6n36s4s44oog08880wksc0ok', '$2y$13$SGHWH5YUDiJN.hIby4yLi.JdbyW3/YB7V.3lOxHr0kQh9iUlfCE1S', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(69, 2071, 'ptanguay', 'ptanguay', 'pauline.tanguay@nsz.com', 'pauline.tanguay@nsz.com', 1, 'esr6zpvi5e88c0g448o8cw8oo8ksg8w', '$2y$13$POcp9OJdkbaChV/JUMev6ec09UqdGOhULb.lV9w6/MnBpUgFzHWi6', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(70, 2072, 'hcharrette', 'hcharrette', 'hilaire.charrette@nsz.com', 'hilaire.charrette@nsz.com', 1, 'pkmxicw3000488oogwog4004840kkkg', '$2y$13$S9ZVSMIrO2XQirrSK5J53O0iIw/vgrmc8AeXrnBiT9aKFS1zDQA5.', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(71, 2073, 'bbizier', 'bbizier', 'brice.bizier@nsz.com', 'brice.bizier@nsz.com', 1, 'djovhqoisb48k080ckkg880wk04wk88', '$2y$13$COEUy.g4GRj2odmrfZ.49O1DPxv6.sC8Qh/IWsYHGmKHFI4NhMZR2', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(72, 2074, 'bducharme', 'bducharme', 'brie.ducharme@nsz.com', 'brie.ducharme@nsz.com', 1, '2lfhb99cwrcwsco8gcck40o4kwc4co8', '$2y$13$xnroDMEdt/w1tYATERr5EuKu1Om8y276Rflsv8OMCBfOVss2Ruw96', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(73, 2075, 'apaiement', 'apaiement', 'audrey.paiement@nsz.com', 'audrey.paiement@nsz.com', 1, 'c8h1uml5nw8w8cg44og00oocc0o8swg', '$2y$13$TA0FtavJ8iKRUUD.IgomWO.Kvxda8NiE13ytqtgELSxGQc2QkOWiG', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(74, 2076, 'sbonneville', 'sbonneville', 'soren.bonneville@nsz.com', 'soren.bonneville@nsz.com', 1, 'a601qzncrjswc0cso8gcwokg0oosgwk', '$2y$13$0Fqtt.Gn7ncD/akbd2Fl3ecVCLD3.5m5KhCqbwdCHszZ8XOL79WQ6', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(75, 2077, 'mplante', 'mplante', 'morgana.plante@nsz.com', 'morgana.plante@nsz.com', 1, 'nokernapcc0ogcsscscsoogk0g0owgo', '$2y$13$lo2ojhuXqaDgKxkTVpCK/OO.jjjIzABcGA9dwrM85Hn8mCRoE1vTu', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(76, 2078, 'jfresne', 'jfresne', 'jeannine.fresne@nsz.com', 'jeannine.fresne@nsz.com', 1, 'or9pd8nqdvk4ggksosock84kcsso4cg', '$2y$13$Kr4pASZw79R.QR6xxc/vzOKD0g4MFAy0XcRXXyjhFWQNd56YKsyKa', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(77, 2079, 'olaboissonnin-re', 'olaboissonnin-re', 'odette.laboissonnin-re@nsz.com', 'odette.laboissonnin-re@nsz.com', 1, '94auo7sljwo4ks0wcso4sgccgs0sckw', '$2y$13$tNlZaW1gxz5.HI1AqTzKpeO8pNfRGHkoSuVm7Uv0nAFk1nmZufPg.', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(78, 2080, 'amn-thot', 'amn-thot', 'adorlee.mn-thot@nsz.com', 'adorlee.mn-thot@nsz.com', 1, 'toz48o1vcqow8c4w08c8w88g8c8k8sw', '$2y$13$j.BF24GUypE1GE.8y4hjp.WWQIJEciAnjSJHOWdU.eMVcwvtoAlMu', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(79, 2081, 'placasse', 'placasse', 'prunella.lacasse@nsz.com', 'prunella.lacasse@nsz.com', 1, 'iyihj2hy2tk4gwscosgoo000wcsg0wg', '$2y$13$1wPCS8AS4oBHJuW2SqLrD.IqdaWMKl5VJCXPUZOXUIm0mDxqB8hbu', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(80, 2082, 'tbn-dard', 'tbn-dard', 'thn-odore.bn-dard@nsz.com', 'thn-odore.bn-dard@nsz.com', 1, 's96n1yu4ee8ks84sck88okcc84oc4gs', '$2y$13$Jcqos9THOM7ZMgeiKfuKpekl2eex83mg6cWnyeMRdxOETw.LpCfRu', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(81, 2083, 'ajoly', 'ajoly', 'aimn-e.joly@nsz.com', 'aimn-e.joly@nsz.com', 1, 'pqi90or9vu8s04kos888cosw8g0404g', '$2y$13$tsCffGLR2cYgtMoZ9EmeX.R4EMZSCmE2UNIi1lGs2MliM/voyFPqC', '2016-05-16 03:09:41', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(82, 2084, 'oroussel', 'oroussel', 'olivier.roussel@nsz.com', 'olivier.roussel@nsz.com', 1, 'mzzx2akqfz4ko000c4o0kc44sg44g4g', '$2y$13$.zkvqtktdcVn7ti3VAtKGeiQ6kxEL3PdvMJZ1r8ca6wo4enoS6C6y', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(83, 2085, 'adoucet', 'adoucet', 'aimn-e.doucet@nsz.com', 'aimn-e.doucet@nsz.com', 1, 'e6nhil3ud6gwswgo4480osg4g8o88s', '$2y$13$WrvfZOE5zexUE0rLrh1Pa.2fe2OgDdhG6s3nGkSMcgWSpCHzHGiDy', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(84, 2086, 'nchatigny', 'nchatigny', 'nnlisabeth.chatigny@nsz.com', 'nnlisabeth.chatigny@nsz.com', 1, '6ww6lhil1ww8cccssk0soswwcs0ggkg', '$2y$13$1d.GB0ru5pJop6ezoLAk2OiSOly498BCMgH9ZtWjQiloJBAG7zAYO', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(85, 2087, 'mplouffe', 'mplouffe', 'matilda.plouffe@nsz.com', 'matilda.plouffe@nsz.com', 1, 'rbx8ykqmsb4cck4co48skos4wgc0w4o', '$2y$13$LVKzTqE31aUcvJLkJ1bdoOBMdRZshN/ALGwEufvNkhFbzuv2XlD/C', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(86, 2088, 'dbisaillon', 'dbisaillon', 'didiane.bisaillon@nsz.com', 'didiane.bisaillon@nsz.com', 1, 'flddkxls74000o0ggwkgkwwkc4wswk8', '$2y$13$js/1ZWCefo2eAjtvIvpO.eI4dsj3oHffArvcI8YzpPv12dOLBalEW', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(87, 2089, 'epaquet', 'epaquet', 'eloise.paquet@nsz.com', 'eloise.paquet@nsz.com', 1, 'st2k41ridys8ogogc4cooss8kccko8o', '$2y$13$2z.H24f1BSKivn8sQcWeJeD1T47FC8XT0A22kuSBgMSZ28vKtNHBS', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(88, 2090, 'adaviau', 'adaviau', 'alexandrie.daviau@nsz.com', 'alexandrie.daviau@nsz.com', 1, 'jymcoqj8zs0gso4scwc4kocso8kgocg', '$2y$13$FTnhtujgQmdsR9UtLZxI0.FEKF9z.rPXFeyd6UMc51UhMvppQWY4u', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(89, 2091, 'nln-tourneau', 'nln-tourneau', 'nanna.ln-tourneau@nsz.com', 'nanna.ln-tourneau@nsz.com', 1, 'qdwfyco4qj4cgs80804os8480kcgs4w', '$2y$13$KIPyR2rxciJYSONTuO.MuOD4Rxjc66KDFzRS1SmPKrgj74r6tN6v2', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(90, 2092, 'aauclair', 'aauclair', 'aloin.auclair@nsz.com', 'aloin.auclair@nsz.com', 1, '27fnprx6wrtwowwo40cwos0sokg8g8k', '$2y$13$/pWrBX7in9CpTcGgWtKIp.jxrVhtx5Ms00OVEvelrflXUAOspjCQa', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(91, 2093, 'jtrottier', 'jtrottier', 'joseph.trottier@nsz.com', 'joseph.trottier@nsz.com', 1, 'lqz6bih2sq8sockscsg4c0wsoswwo8w', '$2y$13$CPPHHClWBiqeeLknNdgcq.Si7f4BOhUdqjXQX6kL3jlsL7SM6ifgK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(92, 2094, 'echartier', 'echartier', 'eulalie.chartier@nsz.com', 'eulalie.chartier@nsz.com', 1, '7qkolm1504wswcwwo04k0gg8s4wg0o4', '$2y$13$AkZ0.yQM98vgDgwbd3/p8ubcjoC.CtqcwVwc8HXb7nFvdj8Ef7xSO', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(93, 2095, 'cln-tourneau', 'cln-tourneau', 'corinne.ln-tourneau@nsz.com', 'corinne.ln-tourneau@nsz.com', 1, 'ghra5ckmiego088k8kg8kkc0so8ogks', '$2y$13$ZNF9eDIVo1nwq5jSAwec5.XmSPh7gOtAhbARtKnPJrWEceKva66By', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(94, 2096, 'dgarreau', 'dgarreau', 'didiane.garreau@nsz.com', 'didiane.garreau@nsz.com', 1, 'k1m2j12tlc0w84sk000ow8k48sgs4wo', '$2y$13$uOvmkEvquQ0jWwjvGqOjYOSQjVIXEbtG/UV.efHpnDWrEG3V3074a', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(95, 2097, 'mraymond', 'mraymond', 'maryse.raymond@nsz.com', 'maryse.raymond@nsz.com', 1, '3aabsmma9c2scgowsko0s4g00gg8cs4', '$2y$13$P3IeugN8T9uKTmM8Jf0/0uWzXFyFLdNPQ/JRuGRzSGYbLZHSZyT6C', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(96, 2098, 'fln-tourneau', 'fln-tourneau', 'florence.ln-tourneau@nsz.com', 'florence.ln-tourneau@nsz.com', 1, 'm8w4voqz3dwww88c4gkgos4gcs40sgs', '$2y$13$C89MDpY.azIhCGTOTJeLvON66.bcVMcOQNd4g6tcqH7b4y8iGkojm', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(97, 2099, 'hsavoie', 'hsavoie', 'honore.savoie@nsz.com', 'honore.savoie@nsz.com', 1, 'o9w4r8yxivkcoks88ss80kokgkg8ogc', '$2y$13$Efz.K/.s38A3/wu6duIxp.nuTBe/w4kH2fNgFF7lvtSY3qhd28rQO', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(98, 2100, 'nclavet', 'nclavet', 'norris.clavet@nsz.com', 'norris.clavet@nsz.com', 1, '55r6tx8fncowg8w08swowsgo84gg80g', '$2y$13$MpdY4tVerOAkHBpaIbeuUOpvdwa4dzluMzGvMDqcFqZAhet5dJe12', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(99, 2101, 'cdupn-rn-', 'cdupn-rn-', 'chapin.dupn-rn-@nsz.com', 'chapin.dupn-rn-@nsz.com', 1, 'qhx3cwhyi9wk8wo8gowg0kgg8c8gwsk', '$2y$13$sLO4Dd241Y96fkz/6lUMlODFILoQdeD3ZFNFmxrvmPM/ZT0KOuKOu', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(100, 2102, 'apetit', 'apetit', 'arno.petit@nsz.com', 'arno.petit@nsz.com', 1, 'bmruqklbljww400c8go80ok4os4kw00', '$2y$13$QZVh59LwrUrPG1AbP5xitOclLEtXp5V/UZAhRZkILipHVVqOxz9iy', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(101, 2103, 'mveronneau', 'mveronneau', 'methena.veronneau@nsz.com', 'methena.veronneau@nsz.com', 1, '1s62qokg8wpw8w88wgcwowskkcc00sc', '$2y$13$pEf1T0v50s6e7dWUxNGRUOwsEvf1WS33mw0vDcpVyKQ45Ca2.hkPS', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(102, 2104, 'alebatelier', 'alebatelier', 'alacoque.lebatelier@nsz.com', 'alacoque.lebatelier@nsz.com', 1, '1pw78rvwn5c04c448k0o4kkssko0g4s', '$2y$13$ZLAZzwIL1QUds3TS0ffeKOeiW/NxJpnWinDe4obZGuWTDUtw4Jc36', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(103, 2105, 'orochefort', 'orochefort', 'olivier.rochefort@nsz.com', 'olivier.rochefort@nsz.com', 1, '9krgvl9ziskk08408gw4k0cgwkgw0kw', '$2y$13$saLNjFH.NtzEMuUo175ISeIdM2jbKkXtki0GZVU7pkGiPdP3jf1du', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(104, 2106, 'tchampagne', 'tchampagne', 'thn-ophile.champagne@nsz.com', 'thn-ophile.champagne@nsz.com', 1, 'b8lsyjzei20ocgs4ogs408kwkwkkw0w', '$2y$13$5iGglsjdTabEqFzKZR8DWOeqBOHfgWVUGzoCOKiWf9mYvdOoF0WR2', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(105, 2107, 'ssenneville', 'ssenneville', 'sacripant.senneville@nsz.com', 'sacripant.senneville@nsz.com', 1, 'rs2ly8uehj444kc0osswc00go4ws4g8', '$2y$13$OqMV/icd7ywZ50XoWy7DsOOBkZYx1nHpdIRdMvxtviGS/kE18e37K', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(106, 2108, 'oguay', 'oguay', 'ocn-ane.guay@nsz.com', 'ocn-ane.guay@nsz.com', 1, 'aoivb81olgoosoo80sc84kk88g0ssko', '$2y$13$EsNlam3/u5oO8F0KcZA7CODBPZMF6jh6ciXEhU90MdVQStWgCYjOe', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(107, 2109, 'dgareau', 'dgareau', 'daniel.gareau@nsz.com', 'daniel.gareau@nsz.com', 1, 'aw3w5fk9hrcow04w8804wo0g0c0488s', '$2y$13$dNs1NvBkxg8szamBHJear.zNGsaRTylfGxTc3x6xGZpHaAy6b6tIi', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(108, 2110, 'ofortier', 'ofortier', 'odette.fortier@nsz.com', 'odette.fortier@nsz.com', 1, '9tb289l10l4w0k0c4wwco4kkg4kokoo', '$2y$13$nzqgykMhNcsYnO8NDKHkb.edfbYE0NLbaYcc8rgmY3c1R4vbA2/Ce', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(109, 2111, 'dlaux', 'dlaux', 'daniel.laux@nsz.com', 'daniel.laux@nsz.com', 1, '7n0lbad63y4gccw848cg000oksko4o4', '$2y$13$vIAr5FbdYru15aeA4BLVVev1cB4vdzy9ID08FdmNipb3AsBrW/YNS', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(110, 2112, 'mfavreau', 'mfavreau', 'manon.favreau@nsz.com', 'manon.favreau@nsz.com', 1, 'ateoz2ul0psggs8ss44sc4kg8ko0g8g', '$2y$13$cLRDyB1eErnZ9fE83VNhzuBXN1k0Jen8kmpw0Y7vpM5zAm1IDjk7O', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(111, 2113, 'cduranseau', 'cduranseau', 'christophe.duranseau@nsz.com', 'christophe.duranseau@nsz.com', 1, 'cztthz216b4sgkkg8ccw08kkow880ww', '$2y$13$gdzebGonT4VbuZroyPVv.eF11DWzly8WBtjK3O7pq4DCDq4I.NCPe', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(112, 2114, 'pbrian', 'pbrian', 'patience.brian@nsz.com', 'patience.brian@nsz.com', 1, 'n51sackmgi88cc8scswwg480ck0kcwg', '$2y$13$jaZZZ9MU1lOBWIzTNNyHvenSfRuVYqwwQAv6yOKwJ0LyiPc9.yZhC', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(113, 2115, 'vriel', 'vriel', 'vachel.riel@nsz.com', 'vachel.riel@nsz.com', 1, 'c8acigf83jwcwcs48w4k4so88wscs0o', '$2y$13$jYlxA8g5yx3Nzyer0pul0Okjx0vPqbI4gg9k4HoiV00qHoqpdz4CS', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(114, 2116, 'rvarieur', 'rvarieur', 'rule.varieur@nsz.com', 'rule.varieur@nsz.com', 1, 'r9z0vio23jksgsskw4sc0gs08g8g00o', '$2y$13$TNYmMGYmiEgpBS9z4O7U4OS/.SJXlIFiYC6yVtkd0MxHqogjgxVpO', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(115, 2117, 'ccourtemanche', 'ccourtemanche', 'clarice.courtemanche@nsz.com', 'clarice.courtemanche@nsz.com', 1, '63xh3d07aycc80ko00wkwscsc8o4880', '$2y$13$9tjqe5KNEY2RHJtgDITBZuprSkX8WU2V9vXdBczKkIQoQgRvx2fru', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(116, 2118, 'bplouffe', 'bplouffe', 'belle.plouffe@nsz.com', 'belle.plouffe@nsz.com', 1, 'qwwkvhudt4go0g4ok4kc84080ccgks4', '$2y$13$hQPNFjREhfYTOO6ZOGFB2u2wlvO1BHSjFIaOQxYhrljK/zVoi7gb6', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(117, 2119, 'atanguay', 'atanguay', 'alphonsine.tanguay@nsz.com', 'alphonsine.tanguay@nsz.com', 1, '1fc1a28ypmv40g0sokkckcosks08kwo', '$2y$13$vzQ5kJFOpTrwuRx17hoIBev4hLjTN7hMoSZhtWlZJsObVeSKz12Pe', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(118, 2120, 'lpelchat', 'lpelchat', 'legget.pelchat@nsz.com', 'legget.pelchat@nsz.com', 1, '92u4ivyntn48kkskw044oc0wgck8g4g', '$2y$13$wSwA8PJK9/MMvbk6/tVY6eXtLw9GuKnY1jpstYP62lcwLedcwrRlK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(119, 2121, 'mdespins', 'mdespins', 'minette.despins@nsz.com', 'minette.despins@nsz.com', 1, 'f7t21mowl748gg80o0s80ok8sc0444s', '$2y$13$OLC8AwHLlOhj./ZtBq2IFe8sbc.i3LgEirOjZO5Zd8ribTVbeJPNq', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(120, 2122, 'ncaouette', 'ncaouette', 'non-mi.caouette@nsz.com', 'non-mi.caouette@nsz.com', 1, 'rlsb994vvrk8swc4gc8sg808s8ggkcs', '$2y$13$H9aWxx.IliBje3yYCxzvVOaySXI4exj4J1zj6BHq7nRkL5Bo/iItW', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(121, 2123, 'fviens', 'fviens', 'florence.viens@nsz.com', 'florence.viens@nsz.com', 1, 'se2f74s5p34w0gwwgks0gsc8osog48s', '$2y$13$HTQC7QVy6/W.z18Azh0hHOnkHWYoKM6RdAezhlmsr4href4rT5H1.', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(122, 2124, 'mlaisnn-', 'mlaisnn-', 'morgana.laisnn-@nsz.com', 'morgana.laisnn-@nsz.com', 1, 'rxax2vp2kdcgcwckos8w4g448s0og0k', '$2y$13$Y8JRcRGpqgotCLjteGhxZe1LgTNuvKpueDt0EJIkq.M8xpCrpC7Ci', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(123, 2125, 'dvarieur', 'dvarieur', 'dreux.varieur@nsz.com', 'dreux.varieur@nsz.com', 1, '2eo3eggw92tcsokoowgk4go4ws4www0', '$2y$13$zJGb4YMs3XewLH8y8Ov/T./y9WhHC2QPCKsU5y6JibCBqxckDNxby', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(124, 2126, 'edesaulniers', 'edesaulniers', 'emmeline.desaulniers@nsz.com', 'emmeline.desaulniers@nsz.com', 1, 'l1nw24ghyogc4g48swsss844cc88cg4', '$2y$13$waZP6o9t6hz6nk0FDwzIs.BBeif7PumsQ1cepwzkwPZXviK7m7OXK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(125, 2127, 'jdeschn-nes', 'jdeschn-nes', 'jules.deschn-nes@nsz.com', 'jules.deschn-nes@nsz.com', 1, 'ysv9pohd96o4s80owk88wg08s44gcg', '$2y$13$GPvHjp6bfA4OoE42HzkzAuzePLEbWPmCyzPIE2PuGtzlgFmzqdYzK', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(126, 2128, 'ovilleneuve', 'ovilleneuve', 'odette.villeneuve@nsz.com', 'odette.villeneuve@nsz.com', 1, 'a8m5cd3j9sg8g4448wkkkoog0gg084o', '$2y$13$Zn5l9XSprhM3nqxKFmsRteL2Aq2.jeQZGx08JgJWIiHRZvvnhLElq', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(127, 2129, 'mruel', 'mruel', 'margaux.ruel@nsz.com', 'margaux.ruel@nsz.com', 1, 'eptj59whre8s4k4so0osgoc4wsgcs4c', '$2y$13$CXn0uIr1NC5zPrIE3r18rO9hptV/TJ1s7jPGcL35i9bfsHJ3p5y/G', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(128, 2130, 'dpichette', 'dpichette', 'dorothn-e.pichette@nsz.com', 'dorothn-e.pichette@nsz.com', 1, 'p25yvbp0ynks044wcwkksgkoccs0o0k', '$2y$13$g/rMJTNvvba/FKgILSoZ7ORsY8DaBgsiD0RN1KRUsy6XGg1Wp1P3K', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(129, 2131, 'agauthier', 'agauthier', 'audrey.gauthier@nsz.com', 'audrey.gauthier@nsz.com', 1, 'h4ztupfdrjksc44ko0gcockook0kwss', '$2y$13$fW8nNtKpaJ69pMhz60iMFO3motaRr2lQ1DiKC9O.lxHukaSw2xw5e', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(130, 2132, 'jmazuret', 'jmazuret', 'jay.mazuret@nsz.com', 'jay.mazuret@nsz.com', 1, 'i076xjsqg944sowk4skgwc0gsw8cc8s', '$2y$13$mII0DyO8mpTamkhnAp335ubFWXecGGIpvrfY2Y9Qa7pIhNxsxUIYO', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(131, 2133, 'tbonami', 'tbonami', 'tearlach.bonami@nsz.com', 'tearlach.bonami@nsz.com', 1, '306wcwomtx2cscw0wogg0o48kww0sg0', '$2y$13$A.9m/q4HPeYPY1Nts7ypaOEdv8g4dVqJor3NjS9zEBl4.7A2Z7kd2', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(132, 2134, 'cduhamel', 'cduhamel', 'channing.duhamel@nsz.com', 'channing.duhamel@nsz.com', 1, '94eahayaem804o884okccgkw8cwcks4', '$2y$13$.5vGZSNUxU5Fbsy38JH3Lud7583/FLk5k/tOFJr6q51yuYsRjRoP2', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(133, 2135, 'ndastous', 'ndastous', 'namo.dastous@nsz.com', 'namo.dastous@nsz.com', 1, 'cq5mj3p2lmo0s08kk44ckccg800k0gw', '$2y$13$lwG5bwSfeIx5fW6gHLz9u.8oz9KchJc00hEFghQ1jAd.koLA7ox4C', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(134, 2136, 'fcourtemanche', 'fcourtemanche', 'fleur.courtemanche@nsz.com', 'fleur.courtemanche@nsz.com', 1, 's7tifvfkta84okw0gskg08kk8oowwww', '$2y$13$GvnQMZlxlXD0JhHqZ8lhMOEaEzHpLHYTa/ZpEhLn2Au5ja0QgGK6a', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(135, 2137, 'blanglois', 'blanglois', 'burkett.langlois@nsz.com', 'burkett.langlois@nsz.com', 1, 'sfn22viozvkgogw4888kkkscksgkcck', '$2y$13$JvPMlwFvx3eyWdHuG56QKe1XuPWo.qKtSPySTf1XYtm/yfwNTTnDi', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD CONSTRAINT `FK_9B76551F611C0C56` FOREIGN KEY (`dossier_id`) REFERENCES `dossier` (`id`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `FK_5E90F6D65200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `FK_5E90F6D6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `FK_A000672A1F55203D` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`),
  ADD CONSTRAINT `FK_A000672AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `FK_91F64639A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_91F64639BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_1483A5E95859934A` FOREIGN KEY (`salarie_id`) REFERENCES `salarie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
