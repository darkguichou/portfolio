-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Juillet 2015 à 17:39
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `naig_coiffure`
--

-- --------------------------------------------------------

--
-- Structure de la table `actus`
--

CREATE TABLE IF NOT EXISTS `actus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `contenu` varchar(20000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `afficher` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `actus`
--

INSERT INTO `actus` (`id`, `titre`, `contenu`, `date`, `afficher`) VALUES
(10, 'banane', '<p>pamplemousse</p>', '2015-06-29', 'false'),
(11, 'pamplemousse', '<p>banane</p>', '2015-06-29', 'false'),
(12, 'banane', '<p style="text-align: center;"><em><strong>pamplemousse en folie</strong> </em></p>', '2015-06-29', 'false'),
(13, 'cactus', '<p>bambou</p>', '2015-06-29', 'false'),
(16, 'pomme', '<p style="text-align: center;"><em><strong>tarte aux pommes</strong></em></p>', '2015-06-29', 'false'),
(19, 'test1', '<p><span style="text-decoration: underline;"><em><strong>BAH voila on test bla bla bla&nbsp; <img src="../js/tinymce/plugins/emoticons/img/smiley-innocent.gif" alt="innocent" /></strong></em></span></p>', '2015-07-01', 'false'),
(20, 'test', '<p><span style="text-decoration: underline;"><strong>test1</strong></span></p>', '2015-07-01', 'false'),
(21, 'Idée de Cadeau :', '<p>Offrez-lui un Rasage Barbier traditionnel.<br /><br />Un pur instant de d&eacute;tente.<br /><br />Pr&eacute;paration de la peau &agrave; l&rsquo;huile de pr&eacute;-rasage, savon &agrave; barbe appliqu&eacute; au blaireau, rasage, passage de la pierre d&rsquo;alun, relaxation 3-4 mn, serviette chaude. <br /><br />Dur&eacute;e : 30 minutes<br /><br />Tarif : 28.00&euro;</p>', '2015-07-09', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `path` varchar(600) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `etat` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`path`, `id`, `nom`, `etat`) VALUES
('images/LPFR_COUPECOURTE_LOOK2.jpg', 14, 'LPFR_COUPECOURTE_LOOK2.jpg', 0),
('images/loading_spinner.gif', 15, 'loading_spinner.gif', 0),
('images/Fotolia_20435997_S.jpg', 16, 'Fotolia_20435997_S.jpg', 0),
('images/LPDMI_HELENABORDON_PHOTOTHEQUE_3(1).jpg', 17, 'LPDMI_HELENABORDON_PHOTOTHEQUE_3(1).jpg', 0),
('images/j_2.jpg', 21, 'j_2.jpg', 4),
('images/j_8.jpg', 22, 'j_8.jpg', 4),
('images/j_6.jpg', 23, 'j_6.jpg', 4),
('images/f_1_mini.jpg', 24, 'f_1_mini.jpg', 2),
('images/f_2_mini.jpg', 25, 'f_2_mini.jpg', 2),
('images/f_3_mini.jpg', 26, 'f_3_mini.jpg', 2),
('images/h_3.jpg', 27, 'h_3.jpg', 3),
('images/h_8.jpg', 28, 'h_8.jpg', 3),
('images/h_4.jpg', 29, 'h_4.jpg', 3),
('images/P1010401(1).png', 30, 'P1010401(1).png', 1),
('images/Fotolia_50219717_Subscription_Monthly_M.png', 32, 'Fotolia_50219717_Subscription_Monthly_M.png', 1),
('images/Fotolia_38516629_Subscription_Monthly_M.jpg', 33, 'Fotolia_38516629_Subscription_Monthly_M.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tarifs`
--

CREATE TABLE IF NOT EXISTS `tarifs` (
  `id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tarifs`
--

INSERT INTO `tarifs` (`id`, `nom`, `prix`) VALUES
('ShampooingCoupeBrushingFemme', 'Shampooing Coupe Brushing  Femme ', 28.9),
('ShampooingCoupeBrushingHomme', 'Shampooing Coupe Brushing  Homme', 18.1),
('ShampooingCoupeCoiffagecollégienne,lycéenne,étudiante', 'Shampooing Coupe Coiffage collégienne,  lycéenne, étudiante', 20.4),
('ShampooingCoupeCoiffageEnfant-de10ans', 'Shampooing Coupe Coiffage Enfant - de 10 ans', 14.95),
('ShampooingCoupecollégien,lycéen,étudiant', 'Shampooing Coupe collégien,  lycéen, étudiant', 15.95);

-- --------------------------------------------------------

--
-- Structure de la table `util`
--

CREATE TABLE IF NOT EXISTS `util` (
  `identifiant` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `util`
--

INSERT INTO `util` (`identifiant`, `mdp`) VALUES
('admin', '$6$rounds=5000$usesomesillystri$r0QZZTlgrgAb/zLF/i1xCPpqT9cWEwAtQUYgjGXbbTmGKKwGQmXwGR8KulnyR3JtiLlucbDMDSbXwKTMRcrDG.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
