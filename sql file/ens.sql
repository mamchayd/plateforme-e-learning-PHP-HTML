-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2018 at 01:30 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ens`
--
CREATE DATABASE IF NOT EXISTS `ens` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ens`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `matricul_admin` varchar(10) NOT NULL,
  `nom_admin` varchar(20) NOT NULL,
  `prenom_admin` varchar(20) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(10) NOT NULL,
  `id_inscript` int(11) NOT NULL,
  PRIMARY KEY (`matricul_admin`),
  KEY `id_inscript` (`id_inscript`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`matricul_admin`, `nom_admin`, `prenom_admin`, `email_admin`, `pass_admin`, `id_inscript`) VALUES
('admin', 'ad', 'ad', 'ad@gmail.com', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `compt_etudiant`
--

CREATE TABLE IF NOT EXISTS `compt_etudiant` (
  `id_comptEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_comptEtudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `compt_professeur`
--

CREATE TABLE IF NOT EXISTS `compt_professeur` (
  `id_compProfesseur` int(11) NOT NULL AUTO_INCREMENT,
  `comment_subject` varchar(50) NOT NULL,
  `comment_text` varchar(50) NOT NULL,
  `comment_status` int(11) NOT NULL,
  PRIMARY KEY (`id_compProfesseur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `compt_professeur`
--

INSERT INTO `compt_professeur` (`id_compProfesseur`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(1, '', '', 1),
(2, 'kkkk', 'inscription', 1),
(3, 'kkk', 'kk', 1),
(5, 'jjj', 'jjj', 1),
(6, 'jjJJ', 'jj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enseigner`
--

CREATE TABLE IF NOT EXISTS `enseigner` (
  `professeur_id` int(11) NOT NULL,
  `etudiant_id` int(11) NOT NULL,
  PRIMARY KEY (`etudiant_id`),
  KEY `professeur_id` (`professeur_id`),
  KEY `professeur_id_2` (`professeur_id`),
  KEY `etudiant_id` (`etudiant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `etudiant_id` int(11) NOT NULL AUTO_INCREMENT,
  `CNE` int(11) NOT NULL,
  `nom_etu` varchar(20) NOT NULL,
  `prenom_etu` varchar(20) NOT NULL,
  `email_etu` varchar(50) NOT NULL,
  `id_filier` int(11) DEFAULT NULL,
  `pass_etu` int(11) DEFAULT NULL,
  `professeur_id` int(11) NOT NULL,
  PRIMARY KEY (`etudiant_id`),
  KEY `id_filier` (`id_filier`),
  KEY `professeur_id` (`professeur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`etudiant_id`, `CNE`, `nom_etu`, `prenom_etu`, `email_etu`, `id_filier`, `pass_etu`, `professeur_id`) VALUES
(1, 123, 'AMCHAYD', 'MARIAM', 'mery@gmail.com', 1, 123, 0),
(2, 1234, 'ARAFA', 'FATIMA', 'fatima@gmail.com', 1, NULL, 0),
(3, 12345, 'EL LAMRISSY', 'JAMILA', 'jamila@gmail.com', 1, 123, 0),
(4, 12348, 'dehadril ', 'layla', 'layla@gmail.com', NULL, NULL, 0),
(5, 4321, 'KERNIGHI', 'KANZA', 'kanza@gmail.com', NULL, NULL, 0),
(6, 7654, 'AIT ICHO', 'ILYASS', 'ilyas@gmail.com', NULL, NULL, 0),
(7, 8785687, 'AIT ICHO', 'ABDRAHHIM', 'abdo@gmail.com', NULL, NULL, 0),
(8, 98877786, 'CHAKHCH', 'ALI', 'ali@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fichier`
--

CREATE TABLE IF NOT EXISTS `fichier` (
  `id_fichier` int(11) NOT NULL AUTO_INCREMENT,
  `professeur_id` int(11) NOT NULL,
  `nom_fichier` varchar(30) NOT NULL,
  `chemin` varchar(50) NOT NULL,
  PRIMARY KEY (`id_fichier`),
  KEY `professeur_id` (`professeur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `filiere`
--

CREATE TABLE IF NOT EXISTS `filiere` (
  `id_filier` int(11) NOT NULL AUTO_INCREMENT,
  `nom-filier` varchar(40) NOT NULL,
  PRIMARY KEY (`id_filier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `filiere`
--

INSERT INTO `filiere` (`id_filier`, `nom-filier`) VALUES
(1, 'TMW');

-- --------------------------------------------------------

--
-- Table structure for table `inscriptioni`
--

CREATE TABLE IF NOT EXISTS `inscriptioni` (
  `CNE` int(11) NOT NULL,
  `etu_nom` varchar(20) NOT NULL,
  `etu_prenom` varchar(20) NOT NULL,
  `etu_email` varchar(40) NOT NULL,
  `etu_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inscriptioni`
--

INSERT INTO `inscriptioni` (`CNE`, `etu_nom`, `etu_prenom`, `etu_email`, `etu_pass`) VALUES
(0, 'fati', '', '', ''),
(13, 'arafa', 'fatima', 'fatima1arafa@gmail.com', 'cc');

-- --------------------------------------------------------

--
-- Table structure for table `inscriptionp`
--

CREATE TABLE IF NOT EXISTS `inscriptionp` (
  `inscription_idProf` int(11) NOT NULL AUTO_INCREMENT,
  `prof_matricul` varchar(10) NOT NULL,
  `prof_nom` varchar(20) NOT NULL,
  `prof_prenom` varchar(20) NOT NULL,
  `prof_email` varchar(40) NOT NULL,
  `prof_tel` varchar(20) NOT NULL,
  `prof_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`inscription_idProf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

CREATE TABLE IF NOT EXISTS `professeur` (
  `professeur_id` int(11) NOT NULL AUTO_INCREMENT,
  `matricul_prof` varchar(10) NOT NULL,
  `matricul_admin` varchar(10) DEFAULT NULL,
  `nom_prof` varchar(20) NOT NULL,
  `prenom_prof` varchar(20) NOT NULL,
  `email_prof` varchar(50) NOT NULL,
  `pass_prof` varchar(10) NOT NULL,
  `tel_prof` varchar(20) NOT NULL,
  PRIMARY KEY (`professeur_id`),
  KEY `matricul_admin` (`matricul_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`professeur_id`, `matricul_prof`, `matricul_admin`, `nom_prof`, `prenom_prof`, `email_prof`, `pass_prof`, `tel_prof`) VALUES
(26, 'M123', NULL, 'DAHBI', 'YOUNNES', 'youness@gmail.com', '', '67465465'),
(27, 'LJ657', NULL, 'BOHMADI', 'MANAL', 'manal@gmail.com', '', '4345243'),
(28, 'H867', NULL, 'DABOUZ', 'HANAN', 'hanan@gmail.com', '', '0687564565'),
(29, 'LK8764', NULL, 'AMHAWCH', 'SARA', 'sara@gmail.com', '', '0678986787'),
(30, 'MLK1234', NULL, 'ELBAHI', 'SIHAM', 'siham@gmail.com', '', '0675453426'),
(31, 'JK765', NULL, 'SOUADI', 'AYMAN', 'ayma@gmail.com', '', '0786543576'),
(32, 'LK986', NULL, 'NABET', 'WAFAE', 'wafae@gmail.com', '', '0684676799'),
(33, 'KJ5364', NULL, 'OUAISS', 'MOUAD', 'mouad@gmail.com', '', '0684674989'),
(34, 'HT57989', NULL, 'LAHLOU', 'AMIN', 'amin@gmail.com', '', '0684674986'),
(35, 'HG46589', NULL, 'LOUGHLAM', 'MOUAD', 'loughlam@gmail.com', '', '0688637498'),
(36, 'mery', NULL, 'MARHOM', 'WARDA', 'warda@gmail.com', '', '0799883309'),
(39, 'mery', NULL, 'mery', 'mery', 'mery@gmail.com', '', '06 77559966');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enseigner`
--
ALTER TABLE `enseigner`
  ADD CONSTRAINT `fke` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiant` (`etudiant_id`),
  ADD CONSTRAINT `fkP` FOREIGN KEY (`professeur_id`) REFERENCES `professeur` (`professeur_id`);

--
-- Constraints for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fkfil` FOREIGN KEY (`id_filier`) REFERENCES `filiere` (`id_filier`);

--
-- Constraints for table `fichier`
--
ALTER TABLE `fichier`
  ADD CONSTRAINT `fkEEEE` FOREIGN KEY (`professeur_id`) REFERENCES `professeur` (`professeur_id`);

--
-- Constraints for table `professeur`
--
ALTER TABLE `professeur`
  ADD CONSTRAINT `fk` FOREIGN KEY (`matricul_admin`) REFERENCES `admin` (`matricul_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
