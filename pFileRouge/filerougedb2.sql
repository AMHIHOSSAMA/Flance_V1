-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 juin 2022 à 17:24
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `filerougedb2`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categor` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categor`, `nom`) VALUES
(100, 'Digital Marketing'),
(200, 'Design'),
(300, 'Programmation');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `telnumber` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `passwords` int(11) NOT NULL,
  `image` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `nom`, `prenom`, `telnumber`, `email`, `date`, `passwords`, `image`) VALUES
(3, 'DAHRI ', 'SALMA', '0643672348', 'dahri.salma@gmail.com', '2022-07-01', 123456, 'https://blog.payoneer.com/wp-content/uploads/2020/10/Becoming-a-Successful-Freelancer-2-1280x720.jpg'),
(4, 'KANDIL', 'MARIAM', '0612457215', 'kandil.mariam@gmail.com', '2000-02-12', 123456, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjlIY-hb3WMjgtVjaeJ6JD_ehzwCbJn0PhyHUceYadEnplF2VYPGvJD39X7dYDO8z61VU&usqp=CAU'),
(5, 'ASKRAM', 'DINA', '0643672348', 'askram.dima@gmail.com', '2022-06-24', 123456, 'https://www.westend61.de/images/0001588050pw/young-female-freelancers-working-on-laptop-together-at-home-PNAF02097.jpg'),
(6, 'GOUMI', 'NIHAN', '0687934545', 'goumi.nihan@gmail.com', '2022-05-18', 123456, 'https://www.creativeboom.com/uploads/articles/01/01127121927824893248bdcea5f9ab193cb28b1c_810.jpeg'),
(7, 'BAKKALI', 'MOUNIR', '0647201458', 'bakkali.mounir@gmail.com', '2001-02-12', 123456, 'https://fjwp.s3.amazonaws.com/blog/wp-content/uploads/2020/10/02072937/Freelancer-start.png'),
(8, 'SURY', 'IBRAHIM', '0643672348', 'sury.ibrahim@gmail.com', '2000-12-02', 123456, 'https://assets.entrepreneur.com/content/3x2/2000/20170613215537-GettyImages-628023676.jpeg'),
(9, 'HARACK', 'SOUHAILA', '0634657975', 'harack.souhaila@gmail.com', '2022-06-14', 123456, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgWFhUYGRgaHBoaGhoaGRwYGhkaGhgZGhoaGBgcJS4lHB4rIRoZJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHzQrJSs0NjQ0NDQ0NTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0PTQ0NDQ0NP/AABEIAJ8BPgMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAFBgMEBwIBCAD/xABIEAACAAQEAgYHBQUFBgcAAAABAgADBBEFEiExBkEiUWFxgZEHEzKhscHRFEJygpIjUmKy8BUWU8LhJDM0osPxF0NjZHOjs//EABkBAAMBAQEAAAAAAAAAAAAAAAECAwAEBf/EACgRAAICAgIBAwQDAQEAAAAAAAABAhEDIRIxQRMiUTJCcaEEgZFhFP/aAAwDAQACEQMRAD8ATuGsPR6OsmN7SZcvleA4lDkIMcJzCKasUHdVPleKtBlvrC21bFvbPKaiZrX0EFpOGodxePKeoS5vyjxq8g6bRNuTCc1eHSx90QIekS+kW6qqLakxVEyGipGOhQqRFedT20vF5JpIiKYLmGTfk1gyokZReKE6DlavQgJUCDdoKCKHQdwgjgNA1RUyZKkKzuACdhYFiT4AwOXYdwhj9HyA4lSg/vk+UtyPeIHkZ/ST8R8Gz5VQ6gq+oIIuLggHblAr+7VTe2T3xtPFNB+0MwDcC47haFpsRCEXBB6jDXXZHk+kICcM1NtJRMVp2GzVNmRgY25MRQScwG4hIxGqLvcgQMkuKtBjNtiP/ZE+2b1T267RXmUbjdG/SY33DkUyF6I26oF1NMmU9EbHlDJWD1DBWGviINYunTX8IitPkg1OXkZyr4FwPnGr+kLh5A8oy0FshUgfwkWPvjDt0zJFSOskO2G8PZmBZLCDtTg1OiFig6IJ23sNoNAc1dCpw/RJLlmpmkAD2FOtz+9bmB/XK4J5zVVSBc2Lam+oA1JPL3Qa4nqAktEvsOig59bdg19/aYHcJUjgTJoQ3Asvzt4ROTopFXsuY3VgtkGiLoBpbSAVRUKdBpbY/UR+xGcbkEHtvA0QsmUiqJ2N9YmpZmVuznECiJUWIyZaKGmgoMy5ztyivhAIq5Vv8aX/ADrBPh6sD05ln2kPmp28toqYSn+2Sf8A5pf86wrfRq7/AAat6QJhVZZA1OcfywpYXNJBW0O/GclXVAf4v8sLtHSKouIpJ+4hGqAeMyLMD1wrYtL6QhtxV876coXMVTpCJTlo6sUejQ8OFsETnp/1oXhTqVEMGH3ODIo3vb/7SfhAGXKst2bblHZH6V+DgdqTr5BWPqCgA3BirQcUTJAshy6HvF9/CP1fNzt2Qu1SamOXLUmdmK1GmFafEGnzMznMSSb+MEKhNYC8PJ0xDHUJrBgkloE229ivwioKVS9aD5xSlC5A2i7wcRepB/w/mYpjQR2I4fuZM/RNrx4LmIrXi5Ll2ELLQxXKxzEzmIkGsBGPyvaOy8SFBELiMqZiOoe62gNVjaDDmBVcNu6DWgosLsvcIYuApmXEaU/+oB+pWX5wuA6L3QW4WY/bKWxsfXS/5xAYX0fQmL1iq+U72HvhH4nlqxuBF3i+ey1La6ZU+ELdZXswtzhZSuLRGnysgTE5iLkJuvvisszObx4ykjWK6KQbiI232OkjWMJ/3C90D6nY9xi9gpvTr3RRqRofGOyJFmL1QIqSRv60Ed+cWjeuMGAMq/U3xWMKxAWnseYmA+TCNr419qSSfut59G5gIrLoGy5623gTxHiSpKJJ0zC/cLsf5ffEoQb3hR9ItRlSUg3fOT3DKB8TGk9CQj7ihhNI1fOLNoumY3voNkHYPjc9safR4ciSwiKAAOqM/wDRrUy1V1ZgHLaAmxI7I0GrxdZSeyWJ2AFyY45y91M74R9uhexfhlJhLEWPJhoR9YQ8VwV5TaXI67W+Eai9dNdQSiS17SS3u0ivMlqw1AI90I50VjG+zJVWLYkMArFSA2qkiwNuY64L4vhQ9bZBYE7DaLGNSlEqVyI0HdY/RYVzHjAo4I+WYOogg+ME6RCKhCNxMQjwcQGpjYg84aMHlq8+ST7LTEv+sXheW6GcdNmj8ZVWUywRoQx/lham4gStlFobOLUT9mW/iHh0YX7S9xaL5O2c2JKloAFIF4rK1EMLIM2kUcXQMRbkI5pvR2wWw/QKRhAtfRv88LLq7DmYd6OYowoAjkR4+svCyKkAaCLylpb8I5Yx29eWL70rdUAqxNTDi9VvpCxXS9WhGyiT8nXDidOGWckAeG06X9dcNBlXi0No58mmJHAeT104MNPVtbvvFecUybdKLHo/nU4qH+0TBLQowUsbAsTsO2B1TVS7kK9wCbG24vpHWvk4/uZ4j2iQzyYq/ak64/fak64LSYxZd7iOZK3MQGtTrjuRiCA3PwgaMW5wIMQtcx6+KoTz8o5NerHogxtI1M69XYQIrht/XOLz4iuxgdVTwwFoDCiZB0V7oJcPW+1U99vXS/51gah6C90T0dR6uYkz9x0f9LBvlCsPg1/jpwtUe1EPxHygBMrpIT+KB/E/Gkmon51DFcqqDlPK5+cATjMsnUNbuMJHl5QlWONHWySpzDpRXTITqNIBSMdkjYN+kxM/EEu+qt5Qjbb6DxNfwS3qFt1RRqTv4wCwjjulSUFYuCBtlP0irU8bUupu3kY6UyLi/gRcUT9s/wCP/NG68VUyn1V+QYfyxgNfiSO7Ot7FrjzjXsf46oXEvJMz9Ek5VPRvbRrjfQ6Rl2UknR6KRbRmXpMNqlE5LKBH5ne/wEO398Ka27fpMJHHtQk+Yk6XfLkyNcW1DFhv+I+UaTVAxp8tlHhJpuZkRFe9tGNgp672MaqlIfVS1e2bW5HUDyjNOAK5Jc8qxtnUBSdswJ08b+6NMxHE5dkIDMAoXo29rnvHFk+o7');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id_comp` int(11) NOT NULL,
  `nomCompetence` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id_comp`, `nomCompetence`) VALUES
(1, 'Logo design'),
(2, 'UX design'),
(3, 'UI design'),
(4, 'Social media '),
(5, 'Content marketing'),
(6, 'SEO'),
(7, 'HTML'),
(8, 'CSS'),
(9, 'JavaScript'),
(10, 'PHP'),
(11, 'WORDPRESS');

-- --------------------------------------------------------

--
-- Structure de la table `freecompetences`
--

CREATE TABLE `freecompetences` (
  `FreelanceID` int(11) DEFAULT NULL,
  `CompsID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `freelancers`
--

CREATE TABLE `freelancers` (
  `idFreelancer` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `telnumber` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `desription` varchar(254) DEFAULT NULL,
  `image` varchar(254) DEFAULT NULL,
  `passwords` varchar(255) NOT NULL,
  `titleFree` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `freelancers`
--

INSERT INTO `freelancers` (`idFreelancer`, `nom`, `prenom`, `date`, `telnumber`, `email`, `desription`, `image`, `passwords`, `titleFree`) VALUES
(1, 'Amhih', 'Ossama', '2022-06-08 00:00:00', '0623900546', 'amhih.ossama@gmail.com', 'Je suis UX UI DESIGNER ', 'https://wise.com/imaginary/freelance-self-employed-france.jpg', '123456', 'UX Designer'),
(2, 'HARAK', 'SOUHAILA', '2022-06-15 00:00:00', '0623904387', 'harak.souhaila@gmail.com', 'Je suis Développeuse FULL-STACK', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM6n_EGsoy6e5Y1DkaBYiPNpobMxJLBw3i2bpRbHl9UrdETQLqU7-hHTEfkJjj1WO0-Y0&usqp=CAU', '123456', 'Développeuse FULL-STACK'),
(3, 'BARI ', 'ZAKARIA', '2022-06-19 00:00:00', '0623904387', 'bari.zakaria@gmail.com', 'Je suis Développeur web full-stack', 'https://www.thestatesman.com/wp-content/uploads/2021/02/QT-How-Freelancers-Can-Break-Into-The-Tech-Industry.jpg', '123456', 'Développeur full-stack'),
(4, 'KAYSSI', 'ZAYD', '2022-06-25 00:00:00', '0987654386', 'kayssi.zayd@gmail.com', 'Je suis Développeur Wordpress', 'https://www.bradhussey.ca/wp-content/uploads/2022/02/malte-helmhold-7xlg2MuTk9c-unsplash-scaled.jpg', '123456', 'Développeur Wordpress'),
(5, 'BENRABAH', 'FATIMA', '2022-06-25 00:00:00', '0987654386', 'benrabah.fatima@gmail.com', 'Je suis Développeuse front-end', 'https://s3.envato.com/files/6d75090a-4e58-4c4f-b760-debfcfb602ee/inline_image_preview.jpg', '123456', 'Développeuse front-end'),
(6, 'LESSANDIN', 'KHAOULA', '2000-03-30 00:00:00', '0623921405', 'lessandenn.khaoula@gmail.com', 'Je suis Graphique designer', 'https://images.unsplash.com/photo-1611872336305-2bb819409c3f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8d29tYW4lMjBoaWphYnxlbnwwfHwwfHw%3D&w=1000&q=80', '123456', 'Graphique designer'),
(7, 'HSSAIN', 'BADR', '2022-06-16 00:00:00', '0623921405', 'hssain.badr@gmail.com', 'Je suis Graphique designer', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtki_Y4pV-DH1d9RcdvDemv2LO6C02pkcUHw&usqp=CAU', '123456', 'Graphique designer'),
(8, 'ABASS ', 'YOUNESS', '2022-06-16 00:00:00', '0623904387', 'abass.youness@gmail.com', 'Je suis Développeur web full-stack', 'https://wise.com/imaginary/c0e262a0d513a8c585921d49b7f8d573.jpg', '123456', 'Développeur full-stack'),
(9, 'OUBAOUCH', 'CHAEIMAE', '2022-06-24 00:00:00', '0623947546', 'oubaouch.chaeimae@gmail.com', 'Je suis Graphique designer', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRUYGBgYGhgYGBgYGBkaGhgYGBgZGRgaGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjQhJCs1NDQ0NjQ0NDE2NDQ2MTQ0NDQ0NDQ0NDQ0NDQ0NDQxNDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAKgBLAMBIgACEQEDEQH', '123456', ' Graphique designer'),
(10, 'KANDIL', 'OMAR', '2022-06-09 00:00:00', '0623900598', 'kandil.omar@gmail.com', 'Je suis Développeur web full-stack', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFRYYGBgaGhgcHBgcGhgcGRgYGBgaHBgYGRgcIS4lHB4rHxgYJjgmKy8xNTU1GiU7QDs0Py40NTEBDAwMEA8QHxISHjYsJSw0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAKgBLAMBIgACEQEDEQH', '123456', 'Développeur  full-stack'),
(11, 'RADI', 'WAFAE', '2022-06-15 00:00:00', '0623921405', 'radi.wafae@gmail.com', 'Je suis Développeur Wordpress', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiBa44E5nb9PGX9S0y1Iz-7_VZBo2xL76naw&usqp=CAU', '123456', 'Développeur Wordpress'),
(12, 'EMRANI', 'EMRAN', '2021-11-16 00:00:00', '0987654345', 'emrni.emran@gmail.com', 'Je suis Digital marketer', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3RxLH536Fcv3CWHuu1aUMgknicj8RtbyVdw&usqp=CAU', '123456', 'Digital marketer'),
(13, 'NAWRASS', 'AYHAM', '0000-00-00 00:00:00', '0617452891', 'nawrass.ayham@gmail.com', 'Je suis digital marketer', 'https://t3.ftcdn.net/jpg/03/56/68/96/240_F_356689689_nv13vuFrYK3rAQospF6BogUa9uXm2KBf.jpg', '123456', 'Digital marketer'),
(29, 'EL ARIBI', 'MOHAMED', '2022-06-21 00:00:00', '0623900546', 'mohamed123@gmail.com', NULL, 'https://t4.ftcdn.net/jpg/02/85/98/31/240_F_285983137_YVgUzZwvYi9PzkXU0MsPsyuWMgCj83DW.jpg', '123456Aribi@', '');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `idCategor` int(11) DEFAULT NULL,
  `idFreelancer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `projets_profss`
--

CREATE TABLE `projets_profss` (
  `numProj` int(11) NOT NULL,
  `idFreelancer` int(11) NOT NULL,
  `titre` varchar(254) DEFAULT NULL,
  `descriProj` longtext DEFAULT NULL,
  `urlProjet` varchar(254) DEFAULT NULL,
  `imageProj` varchar(3000) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `prix` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projets_profss`
--

INSERT INTO `projets_profss` (`numProj`, `idFreelancer`, `titre`, `descriProj`, `urlProjet`, `imageProj`, `categorie`, `prix`) VALUES
(2, 2, 'Construction plateforme', 'Je développerai votre plateforme selon votre souhait', 'https://mir-s3-cdn-cf.behance.net/projects/404/21690d130838231.625b2c742cba0.jpg', 'https://mir-s3-cdn-cf.behance.net/projects/404/21690d130838231.625b2c742cba0.jpg', 'Programmation', 1500),
(3, 2, 'Fort telecom website', 'Je développerai votre telecome website selon votre souhait', 'https://mir-s3-cdn-cf.behance.net/projects/404/8b4a4c140931727.Y3JvcCwxNjE2LDEyNjQsMCww.png', 'https://mir-s3-cdn-cf.behance.net/projects/404/8b4a4c140931727.Y3JvcCwxNjE2LDEyNjQsMCww.png', 'Programmation', 1500),
(4, 3, 'YOGA WEBSITE', 'est un yoga learning website', 'https://mir-s3-cdn-cf.behance.net/projects/404/21cd08139570223.Y3JvcCw1NjAwLDQzODAsMCwxMw.png', 'https://mir-s3-cdn-cf.behance.net/projects/404/21cd08139570223.Y3JvcCw1NjAwLDQzODAsMCwxMw.png', 'Programmation', 1000),
(5, 3, 'Store des vetements', 'Créative store des vetementes modérnes', 'https://mir-s3-cdn-cf.behance.net/projects/404/d8c558143974231.Y3JvcCw4MDgsNjMyLDAsMA.png', 'https://mir-s3-cdn-cf.behance.net/projects/404/d8c558143974231.Y3JvcCw4MDgsNjMyLDAsMA.png', 'Programmation', 0),
(6, 4, 'Agence design website', 'Je développerai votre design agence site web selon votre souhait', 'https://mir-s3-cdn-cf.behance.net/projects/404/e41b42144828293.Y3JvcCwxOTIwLDE1MDEsMCww.png', 'https://mir-s3-cdn-cf.behance.net/projects/404/e41b42144828293.Y3JvcCwxOTIwLDE1MDEsMCww.png', 'Programmation', 1500),
(7, 4, 'Architicture website', 'Je développerai votre architicture site web selon votre souhait', 'https://mir-s3-cdn-cf.behance.net/projects/404/e72cb3109137557.Y3JvcCwxNDQwLDExMjYsMCwz.jpg', 'https://mir-s3-cdn-cf.behance.net/projects/404/e72cb3109137557.Y3JvcCwxNDQwLDExMjYsMCwz.jpg', 'Programmation', 1000),
(12, 13, 'SOCIAL Media Marketing', 'Je serai votre responsable du marketing numérique et votre responsable des médias sociaux', 'https://mir-s3-cdn-cf.behance.net/projects/404/a378ef99950419.Y3JvcCwxOTk5LDE1NjQsMCww.png', 'https://mir-s3-cdn-cf.behance.net/projects/404/a378ef99950419.Y3JvcCwxOTk5LDE1NjQsMCww.png', 'Digital Mark', 1500),
(13, 13, 'Content Marketing', 'Je vais gérer complètement votre marketing numérique', 'https://mir-s3-cdn-cf.behance.net/projects/404/b16ada139057485.Y3JvcCwxMDMxLDgwNiw0NDQsMTM1.jpg', 'https://mir-s3-cdn-cf.behance.net/projects/404/b16ada139057485.Y3JvcCwxMDMxLDgwNiw0NDQsMTM1.jpg', 'Digital Mark', 1500),
(14, 13, 'Creative content', 'Je fournirai un plan et une stratégie de marketing numérique rentables', 'https://mir-s3-cdn-cf.behance.net/projects/404/98caf2111969951.Y3JvcCwyNTA1LDE5NTksMCwzMzM1.jpg', 'https://mir-s3-cdn-cf.behance.net/projects/404/98caf2111969951.Y3JvcCwyNTA1LDE5NTksMCwzMzM1.jpg', 'Digital Mark', 1500),
(15, 13, 'Advertising Post', 'Je serai votre responsable du marketing numérique et votre responsable des médias sociaux', 'https://mir-s3-cdn-cf.behance.net/projects/404/db4779143838959.Y3JvcCwxMDA3LDc4OCwzODksMA.png', 'https://mir-s3-cdn-cf.behance.net/projects/404/db4779143838959.Y3JvcCwxMDA3LDc4OCwzODksMA.png', 'Digital Mark', 1500),
(16, 13, 'Digital Agency', 'Je serai votre responsable du marketing numérique et votre responsable des médias sociaux', 'https://mir-s3-cdn-cf.behance.net/projects/404/e8dcbd139421329.Y3JvcCw3MDMxLDU0OTksNTIsMTU2.png', 'https://mir-s3-cdn-cf.behance.net/projects/404/e8dcbd139421329.Y3JvcCw3MDMxLDU0OTksNTIsMTU2.png', 'Digital Mark', 1500),
(17, 13, 'Creative adds', 'Je serai votre responsable du marketing numérique et votre responsable des médias sociaux', 'https://mir-s3-cdn-cf.behance.net/projects/404/ed621e143061557.Y3JvcCwyNzYxLDIxNTksMCww.jpg', 'https://mir-s3-cdn-cf.behance.net/projects/404/ed621e143061557.Y3JvcCwyNzYxLDIxNTksMCww.jpg', 'Digital Mark', 1500),
(24, 1, 'UX UI Podcast App', 'Ce project est un UX UI  Podcast app', 'https://mir-s3-cdn-cf.behance.net/projects/max_808/5bb384144438063.Y3JvcCwxMTQ4LDg5NywwLDI.png', 'https://mir-s3-cdn-cf.behance.net/projects/max_808/5bb384144438063.Y3JvcCwxMTQ4LDg5NywwLDI.png', 'Design', 1000),
(26, 1, 'Podcat Mobile App', 'UX UI design ', 'https://mir-s3-cdn-cf.behance.net/projects/max_808/5c8d5e126028573.Y3JvcCwyNDI0LDE4OTYsMCww.png', 'https://mir-s3-cdn-cf.behance.net/projects/max_808/5c8d5e126028573.Y3JvcCwyNDI0LDE4OTYsMCww.png', 'Design ', 1000);

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id_post` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `nomPost` varchar(254) DEFAULT NULL,
  `categorie` varchar(25) NOT NULL,
  `imageOffer` varchar(3000) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(300) NOT NULL,
  `link_Projet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id_post`, `idclient`, `nomPost`, `categorie`, `imageOffer`, `date`, `description`, `link_Projet`) VALUES
(4, 3, 'Skincare Logo', 'Design', 'https://mir-s3-cdn-cf.behance.net/projects/404/06dadd116242497.Y3JvcCw4MDgsNjMyLDAsMA.jpg', '2022-06-17', 'i want a logo for my skincare business between 50 and 200 Dh.', ''),
(5, 3, 'Skincare Logo', 'Design', 'https://mir-s3-cdn-cf.behance.net/projects/404/06dadd116242497.Y3JvcCw4MDgsNjMyLDAsMA.jpg', '2022-06-17', 'I want a freelancer for create to me a logo for my skincare business', ''),
(6, 3, 'Site web Hôtel ', 'Programmation', 'https://mir-s3-cdn-cf.behance.net/projects/404/e369d7135480647.Y3JvcCwxMzgwLDEwODAsMjcwLDA.jpg', '2022-06-18', 'je recherche un programmeur freelancer pour me créer un site web pour mon hôtel', ''),
(7, 4, 'Application des movies', 'Programmation', 'https://mir-s3-cdn-cf.behance.net/projects/404/6160a0141700011.Y3JvcCwxNzU2LDEzNzMsMzAsMjY.png', '2022-06-18', 'je veux un programmeur indépendant pour me créer une application pour mon entreprise de cinéma', '');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `idFreelancer` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `numReview` int(11) NOT NULL,
  `notes` int(11) DEFAULT NULL,
  `commentaire` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categor`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`),
  ADD UNIQUE KEY `idclient` (`idclient`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id_comp`);

--
-- Index pour la table `freecompetences`
--
ALTER TABLE `freecompetences`
  ADD KEY `FK_FreeComp` (`FreelanceID`),
  ADD KEY `FK_Comptes` (`CompsID`);

--
-- Index pour la table `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`idFreelancer`),
  ADD UNIQUE KEY `idFreelancer` (`idFreelancer`,`email`),
  ADD KEY `AK_Identifiant_2` (`idFreelancer`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD KEY `FK_Freelance` (`idFreelancer`),
  ADD KEY `FK_Categories` (`idCategor`);

--
-- Index pour la table `projets_profss`
--
ALTER TABLE `projets_profss`
  ADD PRIMARY KEY (`numProj`),
  ADD UNIQUE KEY `numProj` (`numProj`),
  ADD KEY `projectsFK` (`idFreelancer`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `AK_Identifiant_1` (`id_post`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`idFreelancer`,`idclient`,`numReview`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `idFreelancer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `projets_profss`
--
ALTER TABLE `projets_profss`
  MODIFY `numProj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `freecompetences`
--
ALTER TABLE `freecompetences`
  ADD CONSTRAINT `FK_Comptes` FOREIGN KEY (`CompsID`) REFERENCES `competences` (`id_comp`),
  ADD CONSTRAINT `FK_FreeComp` FOREIGN KEY (`FreelanceID`) REFERENCES `freelancers` (`idFreelancer`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_Categories` FOREIGN KEY (`idCategor`) REFERENCES `categories` (`id_categor`),
  ADD CONSTRAINT `FK_Freelance` FOREIGN KEY (`idFreelancer`) REFERENCES `freelancers` (`idFreelancer`);

--
-- Contraintes pour la table `projets_profss`
--
ALTER TABLE `projets_profss`
  ADD CONSTRAINT `projectsFK` FOREIGN KEY (`idFreelancer`) REFERENCES `freelancers` (`idFreelancer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
